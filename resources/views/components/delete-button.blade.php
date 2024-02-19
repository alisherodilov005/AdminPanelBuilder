@props(['route'])

    <form action="{{ $route }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit"><i class=" ri-delete-bin-line"></i></button>
    </form>

