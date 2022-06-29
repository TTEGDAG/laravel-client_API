@if (session('status'))
<div class="alert alert-dismissible fade show py-2 bg-{{ session('status')['type'] }} mb-4">
    <div class="d-flex align-items-center">
        <div class="fs-3 text-{{ session('status')['type'] }}">
            <ion-icon name="checkmark-circle-sharp"></ion-icon>
        </div>
        <div class="ms-3">
            <div class="text-white">{{ session('status')['content'] }}</div>
        </div>
    </div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif