   
@extends('frontOffice.layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('front/css/contact.css') }}">
    <style>
        .btn-submit{
            background-color: #f5f5f5;
            border: 1px solid #f5f5f5;
            border-radius: 5px;
            color:var(--color_5);
            cursor: pointer;
            font-size: 1.2rem;
            font-weight: 600;
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            transition: all 0.3s ease;
        }
        .btn-submit:hover{
            background-color: var(--color_5);
            border: 1px solid var(--color_5);
            color: #fff;
        }
        .btn-submit:disabled{
            background-color: #f5f5f5;
            border: 1px solid #f5f5f5;
            /*  make color lighter grey */
            color: #d3d3d3;
            cursor: not-allowed;
        }
    </style>
@endsection

@section('content')

    {{-- @include('frontOffice.partial.nav')
    @include('frontOffice.partial.header') --}}
{{-- @include('frontOffice.partial.newNav', ['color' => 'light']) --}}
   
    <div class="container">


        <div class="left-info">

            <h1>Parlez-nous<br>de vous <span>.</span></h1>

            {{-- <form action="" class="form">
                <label class="labels" for="">Hi, I'm from&nbsp;&nbsp; </label>
                <input class="put" type="text" placeholder="Company name">&nbsp;&nbsp;
                
                <label class="labels" for=""> and you can call me&nbsp;&nbsp;&nbsp;</label>
                <input class="put" type="text" placeholder="Personal name"><br>
                
                <label class="labels" for="">I was wondering if we could collaborate for a&nbsp;&nbsp;</label>
                <input type="text" class="put"placeholder="Project name">
                <label class="labels" for=""> Project ?</label><br>
                
                <label class="labels" for="">You can connect with me at&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" class="put" placeholder="Email address">
                
                <label class="labels" for="">&nbsp;&nbsp;&nbsp;&nbsp; Or just give me a call</label><br>
                <input class="put" type="tel" placeholder="Phone number">
                <label class="labels" for="">&nbsp;&nbsp;.</label><br>
                
                <div class="btn-holder">
                    <input onclick="" class="btn" type="button" name="doit" value="Let's do it">
                </div>
            </form> --}}
            <form action="" class="form">
                <label class="labels" for="">Bonjour, je m’appelle &nbsp;&nbsp;</label>
                <input class="put" type="text" placeholder="Nom et prénom ">&nbsp;&nbsp;

                <label class="labels" for=""> et je représente la société&nbsp;&nbsp;&nbsp;</label>
                <input class="put" type="text" placeholder="Nom de la société"><br>

                <label class="labels" for="">je vous contacte pour voir avec vous la possibilité de collaborer sur un projet de&nbsp;&nbsp;</label>
                <input type="text" class="put"placeholder="Nom du projet">
                
                <label class="labels" for=""> vous pouvez me contacter sur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" class="put" placeholder="Adresse email">

                <label class="labels" for="">&nbsp;&nbsp;&nbsp;&nbsp; ou m'appelez directement sur</label><br>
                <input class="put" type="tel" placeholder="Numéro de téléphone">
                <label class="labels" for="">&nbsp;&nbsp;.</label><br>
                <input type="submit" class="btn-submit" value="Envoyer" disabled id="submit">
            </form>

        </div>

        <div class="right-info">
        
            <p>Parlons <br>de votre <br> projet <span class="dot"></span></p>
        
            <div class="sous-contact">
                <div class="two-a">
                    <a href="tel:212 648 927 820"><span>+212 648 927 820</span></a>
                    <br>
                    <a href="mailto:Contact@Softcactus.ma?subject = subject text"><span>Contact@softcactus.ma</span>
                    </a>
                    <br>
                </div>

                <div class="one-a">
                    <a target="_blank"
                        href="https://www.google.com/maps/place/6%C3%A9me+%C3%A9tage,+appartement+6,+79+Boulevard+Mohammed+Derfoufi,+Oujda/data=!4m2!3m1!1s0xd7864a4582df6e3:0x27e8d7d3b7263dc5?sa=X&ved=2ahUKEwjc48CGlqz7AhVrRvEDHUnDCXQQ8gF6BAgIEAE"
                        class="a3" value="Find" onclick="InitializeMap();">
                        <span>N° 79, Boulevard Derfoufi,<br>
                            6éme étage, appartement 6,<br>
                            Oujda</span></a>
                </div>
            </div>
        </div>



        <div class="left-support">

            <div class="tech">
                <h2>SUPPORT TECHNIQUE</h2>
                <div class="tech-info">
                    <div class="phone-mail">
                        {{-- <a href="tel:212 648 927 820"><span>+212 648 927 820</span></a> --}}
                        <a href="tel:212 637 368 228"><span>+212 637 368 228</span></a>
                        <br>
                        {{-- <a href="mailto:Support@Softcactus.ma?subject = subject text"><span>Support@softcactus.ma</span> --}}
                        <a href="mailto:o.mouhhaje@softcactus.ma?subject = subject text"><span>o.mouhhaje@softcactus.ma</span>
                        </a>
                        <br>
                    </div>

                    {{-- <div class="address">
                        <a target="_blank"
                            href="https://www.google.com/maps/place/6%C3%A9me+%C3%A9tage,+appartement+6,+79+Boulevard+Mohammed+Derfoufi,+Oujda/data=!4m2!3m1!1s0xd7864a4582df6e3:0x27e8d7d3b7263dc5?sa=X&ved=2ahUKEwjc48CGlqz7AhVrRvEDHUnDCXQQ8gF6BAgIEAE"
                            class="a3" value="Find" onclick="InitializeMap();">
                            <span>N° 79, Boulevard Derfoufi<br>
                                6éme étage appat 6<br>
                                Oujda</span></a>
                    </div> --}}
                </div>
            </div>
            {{-- <div class="tech">
                <h2>TECHNICAL SUPPORT</h2>
                <div class="tech-info">
                    <div class="phone-mail">
                        <a href="tel:212 648 927 820"><span>+212 648 927 820</span></a>
                        <br>
                        <a href="mailto:Support@Softcactus.ma?subject = subject text"><span>Support@softcactus.ma</span>
                        </a>
                        <br>
                    </div>

                    <div class="address">
                        <a target="_blank"
                            href="https://www.google.com/maps/place/6%C3%A9me+%C3%A9tage,+appartement+6,+79+Boulevard+Mohammed+Derfoufi,+Oujda/data=!4m2!3m1!1s0xd7864a4582df6e3:0x27e8d7d3b7263dc5?sa=X&ved=2ahUKEwjc48CGlqz7AhVrRvEDHUnDCXQQ8gF6BAgIEAE"
                            class="a3" value="Find" onclick="InitializeMap();">
                            <span>N° 79, Boulevard Derfoufi<br>
                                6éme étage appat 6<br>
                                Oujda</span></a>
                    </div>
                </div>
            </div> --}}

            <div class="jobs">
                <h2>Les emplois</h2>
                <div class="tech-info">
                    <div class="phone-mail">
                        <a href="{{ route('career') }}"><span>Emplois disponibles</span></a>
                        <br>
                        <a href="mailto:Jobs@Softcactus.ma?subject = subject text"><span>Jobs@softcactus.ma</span>
                        </a>
                        <br>
                    </div>

                    {{-- <div class="address">
                        <a target="_blank"
                            href="https://www.google.com/maps/place/6%C3%A9me+%C3%A9tage,+appartement+6,+79+Boulevard+Mohammed+Derfoufi,+Oujda/data=!4m2!3m1!1s0xd7864a4582df6e3:0x27e8d7d3b7263dc5?sa=X&ved=2ahUKEwjc48CGlqz7AhVrRvEDHUnDCXQQ8gF6BAgIEAE"
                            class="a3" value="Find" onclick="InitializeMap();">
                            <span>N° 79, Boulevard Derfoufi<br>
                                6éme étage appat 6<br>
                                Oujda</span></a>
                    </div> --}}
                </div>

            </div>

        </div>

        <div class="right-support">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.7867749967145!2d-1.9196774237148206!3d34.68533058403652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd786522b2629bc7%3A0xae892dbc9b8b7453!2sSoft%20Cactus!5e0!3m2!1sfr!2sma!4v1669822933241!5m2!1sfr!2sma"
            width="100%"
            height="100%"
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>


    </div>
    
@endsection

@section('script')
<script>

$(document).ready(function () {
    var submitButton = $('input[type="submit"]');
    var inputs = $('input.put');
    inputs.keyup(function () {
        if (inputs.filter(function () {
            return this.value == '';
        }).length == 0) {
            submitButton.removeAttr('disabled');
        } else {
            submitButton.attr('disabled', 'disabled');
        }
    });
});

</script>
@endsection