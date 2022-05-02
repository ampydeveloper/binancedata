<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<div class="container col-4 mt-4 ">
    <form class="d-flex" action="search" method="post">
        @csrf
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name='search' required>
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>

    @if (isset($info))
    <div class="border border-success mt-3">
        @php
        echo '
        <pre>';
          echo json_encode($info, JSON_PRETTY_PRINT); 
         @endphp
        </div>
      @endif
</div>