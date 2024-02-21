@props(['route'])

<form action="{{ $route }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="button" onclick="howalert(this)"><i class=" ri-delete-bin-line"></i></button>
</form>
<script>
    function howalert(button){
        if(confirm("O'chirmoqchimisz")){
            button.parentElement.submit()
        }
    }
</script>
