<?php

namespace App\Http\Middleware;

use App\Models\PageVisit;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    /**
     * Handle an incoming request and track public page visits.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Hanya mencatat request GET sukses dan bukan rute admin, API, livewire, debug
        if ($request->isMethod('GET') && $response->getStatusCode() < 400) {
            $path = $request->path();

            if (
                !$request->is('admin*') &&
                !$request->is('api*') &&
                !$request->is('livewire*') &&
                !$request->is('_debugbar*')
            ) {
                try {
                    $userAgent = $request->userAgent() ?? '';
                    $deviceType = 'desktop';

                    if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i', $userAgent)) {
                        $deviceType = 'mobile';
                    } elseif (preg_match('/android|ipad|playbook|silk/i', $userAgent)) {
                        $deviceType = 'tablet';
                    }

                    PageVisit::create([
                        'url' => substr($request->fullUrl(), 0, 255),
                        'path' => '/' . ltrim($path, '/'),
                        'ip_address' => $request->ip(),
                        'user_agent' => substr($userAgent, 0, 500),
                        'device_type' => $deviceType,
                        'referer' => substr((string) $request->headers->get('referer'), 0, 255) ?: null,
                        'visit_date' => now()->toDateString(),
                    ]);
                } catch (\Throwable $e) {
                    // Mencegah error database mengganggu pengunjung website
                    report($e);
                }
            }
        }

        return $response;
    }
}