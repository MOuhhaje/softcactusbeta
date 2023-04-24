@extends('frontOffice.layouts.layout')
@section('css')
    {{-- import icon cdn --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        :root{
            --white: #fff;
            --black: #000;
            --light-gray: #9a9a9a;
        }
        .bg-color-4{
            background-color: var(--color_4) !important;
        }
        .content-article{
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            width: calc(100% - 40px);
            font-family: 'Poppins', sans-serif;
            color: var(--text_color);
        }
        
        .content-article article{
            padding: 20px;
        }
        .content-article article .tag{
            background-color: var(--color_5);
            color: var(--white);
            padding: 7px 15px;
            font-size: 14px;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 10px;
        }
        .content-article article .title{
            font-size: 30px;
            font-weight: 600;
            margin: 10px 0;
        }
        .content-article article .shares{
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            gap: 10px;
        }
        .content-article article .shares .share{
            color: var(--color_5);
            font-size: 20px;
            font-weight: 600;
            display: inline-block;
            cursor: pointer;
            transition: all .5s ease-in-out;
        }
        .content-article article .shares .share:hover{
            color: var(--color_2);
        }
        .content-article article .date{
            color: var(--light-gray);
            font-size: 14px;
            margin-bottom: 20px;
        }
        .content-article article .date .kbg-color-5{
            color: var(--color_5);
        }


        .content-article article .content-blog{
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .content-article article .content-blog figure{
            display: flex;
            flex-direction: column;
            gap: 10px;
            align-items: center;
            justify-content: center;
            text-align: center;
        }
        .content-article article .content-blog figure img{
            width: 100%;
            height: auto;
        }
        .content-article article .content-blog figure figcaption{
            color: var(--light-gray);
            font-size: 14px;

        }

        .content-article article .content-blog .text{
            font-size: 16px;
            line-height: 1.5;
            text-align: justify;
        }
        .content-article article .content-blog .text .sub-titre-1{
            font-size: 22px;
            font-weight: 600;
            margin: 20px 0;
            text-align: start;
        }
        .content-article article .content-blog .text .sub-titre-2{
            font-size: 18px;
            font-weight: 600;
            margin: 20px 0;
            text-align: start;
        }
        .content-article article .content-blog .text p{
            margin-bottom: 10px;
        }
        .content-article article .content-blog .text ul{
            list-style: disc;
            padding-left: 20px;
            margin-bottom: 20px;
        }
        .content-article article .content-blog .text ul li::marker{
            color: var(--color_5);
            font-size: 16px;
        }
        .content-article article .content-blog .text ul li{
            margin-bottom: 10px;
            font-size: 14px;
        }
       @media screen and (max-width: 480px){
            .content-article article .tag{
                font-size: 12px;
            }
            .content-article article .title{
                font-size: 24px;
            }
            .content-article article .shares .share{
                font-size: 16px;
            }
            .content-article article .date{
                font-size: 12px;
            }
            .content-article article .content-blog figure figcaption{
                font-size: 12px;
            }
            .content-article article .content-blog .text{
                font-size: 14px;
            }
            .content-article article .content-blog .text .sub-titre-1{
                font-size: 20px;
            }
            .content-article article .content-blog .text .sub-titre-2{
                font-size: 16px;
            }
            .content-article article .content-blog .text ul li::marker{
                font-size: 14px;
            }
            .content-article article .content-blog .text ul li{
                font-size: 12px;
            }
       }
    </style>
    <link rel="stylesheet" href="{{ asset('css/frontOffice/article.css') }}">
@endsection

@section('content')
    @include('frontOffice.partial.nav')
    @include('frontOffice.partial.header')


    <section class="content-article bg-img">
        <article>
            <div class="tag">
                Technologie
            </div>
            <div class="title">
                L’intelligence artificielle
            </div>
            <div class="shares">
                <div class="share">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <div class="share">
                    <i class="fab fa-twitter"></i>
                </div>
                <div class="share">
                    <i class="fab fa-linkedin-in"></i>
                </div>
                <div class="share">
                    <i class="fab fa-instagram"></i>
                </div>
            </div>
            <div class="date">
                Publier le 
                <span class="kbg-color-5">15/04/2023</span>
                à
                <span class="kbg-color-5">14:00</span>
                par
                <span class="kbg-color-5">Oumaima ZGHIDA</span>
            </div>
            <div class="content-blog">
                <figure class="media kbg-color-4">
                    {{-- figure with description below --}}
                    {{-- <img src="https://www.1zoom.me/big2/37/183195-frederika.jpg" alt=""> --}}
                    <img src="{{ asset('imgs/blog/news/AI.jpg') }}" alt="">
                    <figcaption>
                        L’intelligence artificielle
                    </figcaption>
                </figure>
               
                <div class="text">
                    <p>
                        L’intelligence artificielle a achevé une étape très avancée ces dernières années , il
                        s’est développé profondément dans les différents domaines, en permettant la
                        réalisation des tâches humaines rapidement et efficacement, ce qui nous pousse à
                        poser des questions : est ce qu’elle peut remplacer l’être humain ? si oui, est ce
                        qu’elle est sécurisée et contrôlable ?
                    </p>
                    <p>
                        Ces questions ont poussé un ensemble des personnes à signer une lettre lancée le
                        22 Mars 2023, pour arrêter le déploiement des nouveaux systèmes qui dépassent
                        GPT-4 et qui les même fonctions de ce dernier , et qui ont un impact extraordinaire
                        sur l’économie du monde, ainsi que cette lettre revendique la suffisance de ce qui
                        est déjà partagé jusqu’à présent, et de focaliser plus sur la recherche scientifique de
                        la sécurité de ces systèmes , vu que ces derniers ont un potentiel énorme, et dans
                        certains cas ils peuvent devenir incontrôlables.

                    </p>
                    <p>
                        Ces questions ont poussé un ensemble des personnes à signer une lettre lancée le
                        22 Mars 2023, pour arrêter le déploiement des nouveaux systèmes qui dépassent
                        GPT-4 et qui les même fonctions de ce dernier , et qui ont un impact extraordinaire
                        sur l’économie du monde, ainsi que cette lettre revendique la suffisance de ce qui
                        est déjà partagé jusqu’à présent, et de focaliser plus sur la recherche scientifique de
                        la sécurité de ces systèmes , vu que ces derniers ont un potentiel énorme, et dans
                        certains cas ils peuvent devenir incontrôlables.

                    </p>
                    <p>
                        Cette lettre a été signée par des scientifiques qui sont conscients des risques de ces
                        systèmes et de l’importance de développer une résistance maîtrisée contre eux.
                        Parmi ces scientifiques on trouve le physicien Max Tegmark, le scientifique en
                        intelligence artificielle Joshua Bengio et le fameux Elon Musk, sans oublier que le
                        gouvernement américain a fait le premier pas pour organiser ce domaine
                        d’intelligence artificielle, ce qui permet à la maison blanche de mettre en place des
                        limites et des règles essentielles qui encadrent l’avancement de ce domaine.

                    </p>
                    <p>
                        Alors, si on est vraiment sous contrôle virtuel, est-ce que vous pouvez accepter une
                        vie purement artificielle?
                    </p>
                    {{-- <div class="sub-titre-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi mollitia corrupti nostrum modi aliquam, distinctio dolore, vitae quod perspiciatis recusandae cumque quibusdam. Ullam quos aperiam voluptatibus reiciendis nisi tenetur modi!
                        Fugiat similique fuga harum! Dignissimos architecto enim voluptas ducimus mollitia iure impedit laborum voluptatum facere autem distinctio, error ullam officia explicabo sapiente amet cupiditate perferendis sequi nam non accusamus illum!
                        Nemo sit eaque minus corporis iure, necessitatibus .
                    </p>
                    <p>
                        iciendis officia facilis dolorem, repudiandae suscipit ipsa consequatur voluptates id perspiciatis, error dolorum enim hic nesciunt quam obcaecati! Error, beatae accusamus? Deleniti, earum.
                        Tenetur, obcaecati in? Explicabo, nobis alias. Aliquam numquam dignissimos tempora praesentium dolorum possimus repellendus illum commodi excepturi, sint modi accusantium nesciunt? Enim, ea provident? Fugit aliquam earum blanditiis obcaecati itaque?
                        Consequatur quos vel recusandae expedita quam quibusdam iure quis minima voluptate optio voluptatem, accusantium modi qui pariatur amet nobis inventore quisquam harum aliquid quasi. Odio, molestias. Sed dolore porro consectetur.
                    </p>
                    <div class="sub-titre-1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae
                    </div>
                    <div class="sub-titre-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.
                    </div>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate magni voluptas vero voluptates doloremque labore sit laborum fuga odio, quod optio repudiandae, placeat officia, dolorum dolorem ad velit fugit in?Impedit delectus omnis illum aliquam, ipsa quasi dolore voluptatem incidunt. Et officia fugit debitis maxime a dignissimos qui sint expedita similique distinctio sapiente est quis ducimus, magnam minus optio ipsa!
                    </p>
                    
                    <div class="sub-titre-2">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.
                    </div>
                    <ul>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</li>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</li>
                    </ul>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.
                    </p>
                </div> --}}
            </div>

        </article>
    </section>

@endsection
@section('script')
    

@endsection