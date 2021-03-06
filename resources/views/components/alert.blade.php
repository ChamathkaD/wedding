<div class="alert alert-{{ $type }}">
    <h5>
        <i class="icon fas @if($type == 'success') fa-check @elseif($type == 'danger') fa-ban  @elseif($type == 'warning') fa-exclamation @endif"></i>
        @if($type == 'success')
            {{ ucfirst($type) }}!
        @elseif($type == 'danger')
            {{ ucfirst('error') }}!
        @elseif($type == 'warning')
            {{ ucfirst('warning') }}
        @endif
    </h5>
    {{ $message }}
</div>
