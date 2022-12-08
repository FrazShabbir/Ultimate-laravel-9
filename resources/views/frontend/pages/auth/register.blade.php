@extends('frontend.main')
@section('title', '')

@section('styles')
@endsection

@push('css')
@endpush



@section('content')

      <!-- Login Section -->
      <section class="pt-0 pb-0">
        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-lg-6 col-md-12 col-sm-12 g-0">
                    <div class="signin_outer_shell">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="">
                                        <div class="login_left_side_outer_div">
                                            <div class="mb-5">
                                                <a href="">
                                                    <img src="assets/images/logo.png" alt="Logo">
                                                </a>
                                            </div>
                                            <div class="">
                                                <div class=" mb-5">
                                                    <h1 class="bold mb-3">Registrácia</h1>
                                                    <p class="text-muted">
                                                        Prihláste sa do svojho konta, môžete skontrolovať svoje objednávky alebo upraviť svoje údaje.
                                                    </p>    
                                                </div>
                                                <form class="login_form" action="">
                                                    <div class="mb-4">
                                                        <label for="" class="form-label mb-1">Meno</label>
                                                        <input type="text" class="form-control" id="" placeholder="Vaše meno">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="" class="form-label mb-1">Priezvisko</label>
                                                        <input type="text" class="form-control" id="" placeholder="Vaše priezvisko">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="" class="form-label mb-1">E-mail</label>
                                                        <input type="email" class="form-control" id="" placeholder="Váš e-mail">
                                                    </div>
                                                    <div class="mb-5">
                                                        <label for="" class="form-label mb-1">Heslo</label>
                                                        <input type="password" class="form-control" id="" placeholder="*******">
                                                    </div>
                                                    <div class="d-block d-lg-flex d-md-flex justify-content-between mb-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="Zapamätať">
                                                            <label class="form-check-label" for="Zapamätať">
                                                                Chcem občas dostávať zľavy a užitočné tipy e-mailom koľvek zrušiť)
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-4">
                                                        <button type="button" class="btn btn-pink w-100">
                                                            Prihlásiť sa <i class="far fa-angle-right"></i>
                                                        </button>
                                                    </div>
                                                    <div class="">
                                                        <p class="text-muted">
                                                            Nemáte účet?
                                                            <a class="bold" href="">
                                                                <u>
                                                                    Prihláste sa
                                                                </u>
                                                            </a>
                                                        </p>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-6 d-none d-lg-block g-0">
                    <div class="login_side_image">
                        <img class="img-fluid" src="assets/images/register.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection


@section('scripts')
@endsection

@push('js')
<script>
    function cartToogle() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
</script>
@endpush
