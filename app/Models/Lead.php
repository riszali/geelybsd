<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lead extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'type',
        'name',
        'phone',
        'email',
        'car_model',
        'car_variant',
        'preferred_date',
        'preferred_time',
        'dealer_location',
        'estimated_otr',
        'dp_percent',
        'tenor_years',
        'leasing_partner',
        'estimated_installment',
        'estimated_tdp',
        'status',
        'sales_notes',
        'source',
        'ip_address',
        'user_agent',
    ];

    protected $casts = [
        'preferred_date' => 'date',
        'estimated_otr' => 'integer',
        'estimated_installment' => 'integer',
        'estimated_tdp' => 'integer',
    ];

    /**
     * Label Model Mobil yang Rapi
     */
    public function getCarModelLabelAttribute(): string
    {
        return match (strtolower($this->car_model)) {
            'ex5' => 'Geely EX5',
            'ex2' => 'Geely EX2',
            'starray' => 'Starray EM-i',
            'coolray' => 'Geely Coolray',
            default => strtoupper($this->car_model ?? '-'),
        };
    }

    /**
     * Label Lokasi Dealer
     */
    public function getDealerLocationLabelAttribute(): string
    {
        return match (strtolower($this->dealer_location ?? '')) {
            'bsd' => 'Geely BSD City',
            'pik' => 'Geely Center PIK',
            'pondok-indah' => 'Geely Pondok Indah',
            'home' => 'Home Service (Jadetabek)',
            default => $this->dealer_location ?? 'Dealer BSD',
        };
    }

    /**
     * Format Nomor untuk WhatsApp (628xxxx)
     */
    public function getFormattedWhatsappPhoneAttribute(): string
    {
        $phone = preg_replace('/[^0-9]/', '', (string) $this->phone);

        if (str_starts_with($phone, '0')) {
            return '62' . substr($phone, 1);
        }

        if (str_starts_with($phone, '8')) {
            return '62' . $phone;
        }

        return $phone;
    }

    /**
     * Link WhatsApp Langsung untuk Sales
     */
    public function getWhatsappFollowUpUrlAttribute(): string
    {
        $phone = $this->formatted_whatsapp_phone;
        $customerName = urlencode($this->name);
        $model = urlencode($this->car_model_label);
        $date = $this->preferred_date ? $this->preferred_date->format('d M Y') : 'sesuai kesepakatan';
        $time = $this->preferred_time ? urlencode($this->preferred_time) : 'fleksibel';

        $text = "Halo Kak {$customerName}, terima kasih telah mengajukan test drive {$model} melalui website resmi Geely BSD. Kami ingin mengonfirmasi jadwal test drive Anda pada tanggal {$date} pukul {$time}. Apakah ada waktu luang untuk berbicara sejenak?";

        return "https://wa.me/{$phone}?text={$text}";
    }

    /**
     * Badge Warna Status
     */
    public function getStatusBadgeAttribute(): array
    {
        return match ($this->status) {
            'new' => [
                'label' => 'New Lead',
                'bg' => 'bg-cyan-500/20 text-cyan-300 border-cyan-400/40',
            ],
            'contacted' => [
                'label' => 'Contacted',
                'bg' => 'bg-amber-500/20 text-amber-300 border-amber-400/40',
            ],
            'test_drive_scheduled' => [
                'label' => 'Scheduled',
                'bg' => 'bg-blue-500/20 text-blue-300 border-blue-400/40',
            ],
            'spk_deal' => [
                'label' => 'SPK / Deal',
                'bg' => 'bg-emerald-500/20 text-emerald-300 border-emerald-400/40',
            ],
            'lost' => [
                'label' => 'Lost',
                'bg' => 'bg-rose-500/20 text-rose-300 border-rose-400/40',
            ],
            default => [
                'label' => ucfirst($this->status),
                'bg' => 'bg-gray-500/20 text-gray-300 border-gray-400/40',
            ],
        };
    }
}