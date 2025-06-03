<div class="step completed">
    <div class="step-icon"></div>
    <div class="step-info">
        <p class="step-title">Pesanan Dibuat</p>
        <p class="step-date">{{ \Carbon\Carbon::parse($orders->created_at)->format('d F Y h:i') }}</p>
    </div>
</div>
<!-- Step 2 -->
<div class="step">
    <div class="step-icon"></div>
    <div class="step-info">
        <p class="step-title">Pesanan Diproses</p>
        {{-- <p class="step-date">10 November 2024, 02:00 WIB</p> --}}
    </div>
</div>
<!-- Step 3 -->
<div class="step">
    <div class="step-icon"></div>
    <div class="step-info">
        <p class="step-title">Pesanan Dikirim</p>
        {{-- <p class="step-date">11 November 2024, 09:00 WIB</p> --}}
    </div>
</div>
<!-- Step 4 -->
<div class="step">
    <div class="step-icon"></div>
    <div class="step-info">
        <p class="step-title">Pesanan Selesai</p>
        {{-- <p class="step-date">Estimasi: 12 November 2024</p> --}}
    </div>
</div>