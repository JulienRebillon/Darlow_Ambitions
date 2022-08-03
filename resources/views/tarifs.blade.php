<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>AmbitionsCoaching</title>
    </head>
    <body>
        <header>
            <div class="flex bg-white">
                <!-- burger navigation -->
                <nav role="navigation">
                    <div id="menuToggle" class="block relative top-50 left-50 z-1 ">
                      <!--
                      A fake / hidden checkbox is used as click reciever,
                      so you can use the :checked selector on it.
                      -->
                      <input type="checkbox" class="block w-[40px] h-[32px] absolute -top-7 -left-5 z-2 opacity-0"/>
                      
                      <!--
                      Some spans to act as a hamburger.
                      
                      They are acting like a real hamburger,
                      not that McDonalds stuff.
                      -->
                      <span class="bg-black block w-[33] h-[4] mb-5 relative rounded z-1"></span>
                      <span class="bg-black block w-[33] h-[4] mb-5 relative rounded z-1"></span>
                      <span class="bg-black block w-[33] h-[4] mb-5 relative rounded z-1"></span>
                      
                      <!--
                      Too bad the menu has to be inside of the button
                      but hey, it's pure CSS magic.
                      -->
                        <ul id="menu" class="flex flex-col items-center">
                            
                            <a href="#"><li><img src="/images/LOGO-50K-POUR-CENT-7.png" class="w-28 mb-8"></li></a>

                            <a href="{{ route('apropos') }}"><li class="my-3 text-black">A propos</li></a>
                            <a href="{{ route('tarifs') }}"><li class="my-3 text-gray-600">Tarifs</li></a>
                            <a href="{{ route('blog') }}"><li class="my-3 text-gray-600">Blog</li></a>
                            <a href="{{ route('avis') }}"><li class="my-3 text-gray-600">Avis</li></a>
                            <a href="{{ route('contact') }}"><li class="my-3 text-gray-600">Contact</li></a>
                            <div class="flex">
                                <img src="/images/picto/icons8-search-58.png" alt="" class="">
                    
                                <a href="{{ route('contact') }}" class="">
                                    <div class="flex w-50 text-white border-red  bg-red-600 px-4 pt-2 pb-3">
                                    <img src="/images/picto/phone.png" class="w-6 mr-2">
                                    <p class="text-white">+800 100 900</p>
                                    </div>
                                </a>
                            </div>

                            
                        </ul>
                    </div>
                </nav>
                
                <div id="container_logo" class="">
                    <a href="{{ route('home') }}" ><img src="" alt="" /></a>
                </div>

                <!-- menu de navigation desktop-->
                <div class="flex hidden">
                    <a href="{{ route('apropos') }}" class="text-black">A propos<br/>
                    <div class=" w-2 h-2 rounded bg-red-600"></div></a>

                    <a href="{{ route('tarifs') }}" class="text-black">Tarifs<br/>
                        <div class=" w-2 h-2 rounded bg-black-900 hover:bg-red-700"></div></a>

                    <a href="{{ route('blog') }}" class="text-black">Blog<br/>
                        <div class=" w-2 h-2 rounded bg-black-900 hover:bg-red-700"></div></a>
                    
                    <a href="{{ route('avis') }}" class="text-black">Avis<br/>
                        <div class=" w-2 h-2 rounded bg-black-900 hover:bg-red-700"></div></a>

                    <a href="{{ route('contact') }}" class="text-black">contact<br/>
                        <div class=" w-2 h-2 rounded bg-black-900 hover:bg-red-700"></div></a>

                    <img src="/images/picto/icons8-search-58.png" alt="" class="">
                    
                    <a href="{{ route('contact') }}" class="">
                        <div class="flex w-50 text-white border-red bg-red-600 px-4 pt-2 pb-3">
                            <img src="/images/picto/phone.png" class="w-6 mr-2">
                            <p class="text-white">+800 100 900</p>
                        </div>
                    </a>
                </div>
            </div>
        </header>

        <main>
            <div id="section_1" class="flex flex-col bg-black lg:flex-row">
                <div>   
                    <p class="text-gray-500 font-bold text-lg ml-4 mt-8 mb-9">(FUTURS) ENTREPRENEURS</p>
                    <h1 class="text-6xl text-white mb-3 ml-4 ">Coaching<br/>Business</h1>
                    <p class="text-white font-bold text-xl mt-6 mb-12 ml-4">au service des ambitieux</p>
                    <div class="flex flex-col ml-4 sm:flex-row lg:flex-col xl:flex-row">
                        <button class="w-72 h-16 text-white text-xl border-red rounded-full bg-red-600 px-8 pt-1 pb-1 mb-2">
                            <div class="flex">
                                <img src="/images/picto/diamond.png" class="w-6 h-6 ml-3 mr-2 mt-2" alt="" >
                                <p>Appel découverte</p>
                            </div>
                        </button>
                        <button class="w-48 h-16 text-white text-xl border-2 rounded-full bg-black border-white px-8 pt-1 pb-3 mt-2 sm:mt-0 mb-24"> 
                            <div class="flex">
                                <p class="ml-3 mt-1">Contact</p>
                                <img src="/images/picto/right-arrow.png" class="w-6 h-6 ml-3 mt-2" alt="" >
                                
                            </div>
                        </button>
                    </div>
                </div>    
                <div>
                    <img src="/images/HP-COACHING-BUSINESS-PAULINE-CHEYROUZE-FINAL.png" alt=""/>
                </div>
            </div>

            <div id="section_2" class="flex flex-col bg-[#191C51] px-8 lg:flex-row">
                <img src="/images/image_illustrations_06.png" alt="" class=" max-w-{300px} lg:hidden"/>
                <img src="/images/HOMEPAGE_COACHINGAMBITIONS.png" alt="" class="hidden lg:block w-6/12"/>

                <div>
                    <p class="text-gray-400 font-bold text-xs mt-6 mb-4">BENEFICES</p>
                    <h2 class="text-white text-3xl mb-8">Pourquoi me faire <span class="font-bold">confiance</span></h2>

                    <div class="flex flex-col">

                        <div class="flex flex-col lg:flex-row">
                            <div class="flex flex-col py-4">
                                <div>
                                    <div class="flex items-center">
                                        <div class="pr-2">
                                            <img src="/images/picto/trend.png" alt="" class="w-10 mr-2">
                                        </div>
                                        <p class="text-white text-xl font-bold mb-3">10 ans XP</p><br/>
                                    </div>
                                    <p class="w-9/12 text-sm text-gray-300">Tu vas être accompagné(e) par une entrepreneuse qui a 10 ans d'expérience</p>
                                </div>
                            </div>

                            <div class="flex flex-col py-4">
                                <div>
                                    <div class="flex items-center">
                                        <div class="pr-2">
                                            <img src="/images/picto/icons8-search-58.png" alt="" class="w-10 mr-2">
                                        </div>
                                        <p class="text-white text-xl font-bold mb-3">Soutien</p><br/>
                                    </div>
                                    <p class="w-9/12 text-sm text-gray-300 ">Tu vas tu sentir soutenu dans les bons et les mauvais moments</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col lg:flex-row">
                            <div class="flex flex-col py-4">
                                <div>
                                    <div class="flex items-center">
                                        <div class="pr-2">
                                            <img src="/images/picto/icons8-idea-32.png" alt="" class="w-10 mr-2">
                                        </div>
                                        <p class="text-white text-xl font-bold mb-3">Motivation</p><br/>
                                    </div>
                                    <p class="w-9/12 text-sm text-gray-300">Avec la motivation de ta coach, tu seras toujours motivé.e</p>
                                </div>
                            </div>

                        
                            <div class="flex flex-col py-4 lg:ml-24">
                                <div>
                                    <div class="flex ">
                                        <div class="pr-2">
                                            <img src="/images/picto/icons8-trophy-64.png" alt="" class="w-10 mr-2">
                                        </div>
                                        <p class="text-white text-xl font-bold mb-3">Idées</p><br/>
                                    </div>
                                    <p class="w-9/12 text-sm text-gray-300">A la fin de chaque séance de coaching, tu repartiras avec des idées plein la tête</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            
            </div>

            <div id="section_3" class="px-3 bg-white flex flex-col pl-6 lg:flex-row">
                <div><!-- Colonne gauche-->
                    <div>
                        <p class="text-gray-400 font-bold text-xs mt-6 mb-4">POUR QUI</p>
                        <h2 class="text-4xl mb-4 ">C'est <b>pour toi</b></h2>
                        <div class="flex my-2 text-gray-600 text-sm">
                            <img src="/images/picto/check.png" alt="" class="w-6 h-5 mt-1 mr-4">
                            <p>Tu souhaites devenir entrepreneur</p>
                        </div>

                        <div class="flex my-2 text-gray-600">
                            <img src="/images/picto/check.png" alt="" class="w-6 h-5 mt-3 mr-4 mt-1 ">
                            <p>Tu es déjà entrepreneur, et tu génères entre 0€ et 50K€ de CA annuel.</p>
                        </div>

                        <div class="flex my-2 text-gray-600 text-sm">
                            <img src="/images/picto/check.png" alt="" class="w-6 h-5 mt-1 mr-4">
                            <p>Tu souhaites générer plus de chifffre d'affaires</p>
                        </div>

                    </div>

                    <div class="flex flex-col"> <!-- les chiffres -->
                        <div class="flex flex-col lg:flex-row">
                            <div class="my-6 w-4/12 mr-24">
                                <img src="/images/picto/icons8-facebook-like-50.png" alt="" class="w-8 h-8">
                                <p class="text-3xl font-bold">1,5+</p>
                                <p class="font-bold">Billions Tasks</p>
                            </div>

                            <div class="my-6 w-4/12">
                                <img src="/images/picto/icons8-drawer-32.png" alt="" class="w-8 h-8">
                                <p class="text-3xl font-bold">150+</p>
                                <p class="font-bold">Millions Projects</p>
                            </div>    
                        </div>

                        
                    </div>

                    <button class="w-48 text-white border-red rounded-full bg-red-600 px-8 pt-2 pb-3 mb-12">Longterm Mission</button>
                </div>
                <div> <!-- colonne droite-->
                    <img src="/images/35.png" alt="" class="max-w-96 max-h-96">
                </div>

            </div>

            <div id="section_4" class="flex flex-col mb-48">

                <div>
                    <img src="/images/33.png" alt="">
                </div>

                <div class="flex flex-col ml-12">
                    <h2 class="text-3xl  my-4">Pourquoi faire</br>appel <b>à une</br>coach</b></h2>
                    <p class="text-sm mb-4">Un coach sera là pour vous et vous donner des idées pour développer votre business.</p>
                    <div class="flex my-2 text-gray-600">
                        <img src="/images/picto/check.png" alt="" class="w-6 h-5 mt-3 mr-4">
                        <p>Supervision d'un projet professionnel</p>
                    </div>
                    <div class="flex my-2 text-gray-600">
                        <img src="/images/picto/check.png" alt="" class="w-6 h-5 mt-3 mr-4">
                        <p>Résolution de difficultés</p>
                    </div>
                    <div class="flex my-2 text-gray-600 mb-4">
                        <img src="/images/picto/check.png" alt="" class="w-6 h-5 mt-3 mr-4">
                        <p>Encadrement nouveaux éléments</p>
                    </div>

                    <button class="w-48 text-white border-black rounded-full bg-black px-8 pt-2 pb-3 mb-12">Try Ipsum for Free</button>

                </div>
            </div>


            <div id="section_5" class="bg-black mx-1 rounded-[18px]">
                <div class="mx-10 py-8">
                    <h2 class="text-3xl font-bold text-white mt-6">Ils en parlent mieux que moi.</h2>>
                    <p class="text-3xl text-gray-300">Faites confiance à une entrepreneuse</p>
                </div>
                <div class="flex flex-col">
                    <div>
                        <img><!-- icone note-->
                        <div class="flex ml-8">
                            <img src="/images/GOOGLE-LOGO-160x160.png" alt=""><!-- icone google-->
                            <div class="flex flex-col">
                                <p class="text-xl text-white font-bold mb-4">Avis vérifiés</p>
                                <p class="text-xs font-bold text-white">GOOGLE</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <img><!-- icone note-->
                        <div class="flex ml-8">
                            <img src="/images/FACEBOOK-LOGO-160x160.png" alt=""><!-- icone google-->
                            <div class="flex flex-col">
                                <p class="text-xl text-white font-bold mb-4">Avis vérifiés</p>
                                <p class="text-xs font-bold text-white">FACEBOOK</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="hidden">
                    <img> <!-- Logo site-->
                </div>
            </div>

            <div id="section_6" class="bg-white mt-24 px-6 flex flex-col items-center">
                <p class="text-gray-400 font-bold text-xs mt-6 mb-4">ACCOMPAGNEMENTS</p>
                <div class="inline">
                    <h2 class="text-3xl font-bold mt-6 mb-12">Prêt à décoller <span class="text-3xl font-bold text-red-500 mt-6">vers les étoiles</span></h2>
                </div>

                <div class="flex flex-col lg:flex-row">
                    <div class="bg-gray-100 rounded-[18px] flex flex-col items-center py-8 px-12 my-6 mx-4">
                        <img src="/images/picto/chess-piece.png" alt="" class="w-14 mt-2 mb-12 bg-white rounded-full">
                        <p class="text-xs font-bold">COACHING EXPRESS</p>
                        <div class="flex py-3">
                            <p class="mt-3 mr-1">€</p>
                            <p class="text-3xl font-bold">200</p>
                        </div>

                        <div class="flex my-2 text-gray-800 text-xs">
                            <img src="/images/picto/check.png" alt="" class="w-6 h-5 mt-3 mr-4">
                            <p>Séance visio une heure</p>
                        </div>

                        <div class="flex my-2 text-gray-800 text-xs">
                            <img src="/images/picto/check.png" alt="" class="w-6 h-5 mt-3 mr-4">
                            <p>Thème de votre choix</p>
                        </div>

                        <div class="flex my-2 text-gray-800 text-xs">
                            <img src="/images/picto/check.png" alt="" class="w-6 h-5 mt-3 mr-4">
                            <p>Rapport PDF de la visio</p>
                        </div>

                        <div class="flex my-2 text-gray-800 text-xs">
                            <img src="/images/picto/check.png" alt="" class="w-6 h-5 mt-3 mr-4">
                            <p>Enregistrement de la visio</p>
                        </div>

                        <button class="w-36 text-black border-2 rounded-full bg-gray-100 border-black rounded-full px-8 pt-2 pb-3 mt-2 ">Purchase </button>
                    </div>

                    <div class="bg-black rounded-[18px] flex flex-col items-center py-8 px-12 my-6 mx-4">
                        <img src="/images/picto/chess.png" alt="" class="w-14 mt-2 mb-12 bg-white rounded-full">
                        <p class="text-xs text-white font-bold">ACCOMPAGNEMENT 3 MOIS</p>
                        <div class="flex py-3">
                            <p class="text-white mt-3 mr-1">€</p>
                            <p class="text-white text-3xl font-bold">3000</p>
                        </div>

                        <div class="flex my-2 text-white text-xs">
                            <img src="/images/picto/check.png" alt="" class="w-6 h-5 mt-3 mr-4">
                            <p>Séance visio une heure</p>
                        </div>

                        <div class="flex my-2 text-white text-xs">
                            <img src="/images/picto/check.png" alt="" class="w-6 h-5 mt-3 mr-4">
                            <p>Thème de votre choix</p>
                        </div>

                        <div class="flex my-2 text-white text-xs">
                            <img src="/images/picto/check.png" alt="" class="w-6 h-5 mt-3 mr-4">
                            <p>Rapport PDF de la visio</p>
                        </div>

                        <button class="w-36 text-white border-2 rounded-full bg-black border-white rounded-full px-8 pt-2 pb-3 mt-2 ">Purchase </button>
                    </div>

                    <div class="bg-gray-100 rounded-[18px] flex flex-col items-center py-8 px-12 my-6 mx-4">
                        <img src="/images/picto/king.png" alt="" class="w-14 mt-2 mb-12 bg-white rounded-full">
                        <p class="text-xs font-bold">ACCOMPAGNEMENT 6 mois</p>
                        <div class="flex py-3">
                            <p class="mt-3 mr-1">€</p>
                            <p class="text-3xl font-bold">6000</p>
                        </div>

                        <div class="flex my-2 text-gray-800 text-xs">
                            <img src="/images/picto/check.png" alt="" class="w-6 h-5 mt-3 mr-4">
                            <p>Completely synergize</p>
                        </div>

                        <div class="flex my-2 text-gray-800 text-xs">
                            <img src="/images/picto/check.png" alt="" class="w-6 h-5 mt-3 mr-4">
                            <p>Professionally cultivate</p>
                        </div>

                        <div class="flex my-2 text-gray-800 text-xs">
                            <img src="/images/picto/check.png" alt="" class="w-6 h-5 mt-3 mr-4">
                            <p>Dynamically innovate</p>
                        </div>

                        <div class="flex my-2 text-gray-800 text-xs">
                            <img src="/images/picto/check.png" alt="" class="w-6 h-5 mt-3 mr-4">
                            <p>Proactively envisioned</p>
                        </div>

                        <button class="w-36 text-black border-2 rounded-full bg-gray-100 border-black rounded-full px-8 pt-2 pb-3 mt-2 ">Purchase </button>
                    </div>

                </div>    
            </div>

            <div id="section_7" class="bg-black h-[900px] my-12">

            </div>

            <div id="section_8" class="bg-gradient-to-b from-bg-white to-gray-100 items-center my-6">

                <div class="items-center mx-6">
                <h2 class="text-3xl font-bold">Ce que mes <span class="text-red-600">coachés</span> disent</h2>
                </div>

                <div class="bg-gray-100 flex flex-col lg:flex-row"><!--Container avis-->
                    <!-- Avis client-->
                    <div class="bg-white rounded-[18px] flex flex-col  py-8 px-12 my-6 mx-6 lg:w-10/12">
                        <h3 class="font-bold text-xl my-3">"Je recommande a 9999999% Pauline ! "</h3>
                        <img src="/images/picto/stars.png" alt="" class="w-16 -my-3">
                        <p class="text-gray-500 text-xs my-3">Je recommande a 9999999% Pauline ! Elle vous soutiendra et ne vous lâchera jamais ! Quand j'ai débuter mon parcours elle a toujours était présente et surtout très rassurante, parfois autoritaire mais cela nous permet de bien rester concentré et surtout d'avancer sereinement ! Très à l'écoute et avec beaucoup de réponses à nos questions elle est pour moi une coach née ! Choisissez la comme je l'ai choisis et vous pourrez fête vos 6 ans d'auto entreprise</p>

                        <img src="/images/inner_image_04-320x320.jpg" alt="" class="rounded-full w-12">
                        <p class="font-bold text-sm">JUSTINE</p>
                        <p class="font-bold text-sm">PHOTOGRAPHE</p>

                    </div>

                    <div class="bg-white rounded-[18px] flex flex-col  py-8 px-12 my-6 mx-6 lg:w-10/12">
                        <h3 class="font-bold text-xl my-3">"Pauline a vraiment le don de donner envie"</h3>
                        <img src="/images/picto/stars.png" alt="" class="w-16 -my-3">
                        <p class="text-gray-500 text-xs my-3">Pauline a vraiment le don de donner envie de foncer et elle a beaucoup d’idées créatives et elle connaît un max d’outils utiles, comment les utiliser, etc. Elle m’inspire chaque jour! Lorsque je fais une séance avec elle, je repars avec beaucoup d'idées et d'énergie.</p>

                        <img src="/images/inner_image_01-320x320.jpg" alt="" class="rounded-full w-12">
                        <p class="font-bold text-sm">CHRISTINE</p>
                        <p class="font-bold text-sm">CEO Silence</p>

                    </div>
                </div>
            </div>


            <div id="section_9" class="bg-gray-100 h-[700px] mt-12 z-0">
                <div class="flex flex-col ">

                    <div class="flex flex-col sm:flex-raw" >
                        <div class="w-5/12 my-6 mx-6">
                            <div class="flex flex-col md:flex-row">
                                <img src="/images/picto/dots-menu.png" alt="" class="w-7 mb-3 mr-3 md:h-7 md:mt-2">
                                <div class="flex flex-col">
                                    <p class="text-4xl font-bold">10+</p>
                                    <p class="font-bold">Années Experiences</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-5/12 my-6 mx-6">
                            <div class="flex flex-col md:flex-row">
                                <img src="/images/picto/shuttle.png" alt="" class="w-7 mb-3 mr-3 md:h-7 md:mt-2">
                                <div class="flex flex-col">
                                    <p class="text-4xl font-bold">2013</p>
                                    <p class="font-bold">Start Business</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-raw" >
                        <div class="w-48 my-6 mx-6">
                            <div class="flex flex-col md:flex-row">
                                <img src="/images/picto/trend.png" alt="" class="w-7 mb-3  mr-3 md:h-7 md:mt-2">
                                <div class="flex flex-col">
                                    <p class="text-4xl font-bold">99%</p>
                                    <p class="font-bold">Success</p>
                                </div>
                            </div>
                        </div>

                        <div class="w-48 my-6 mx-6">
                            <div class="flex flex-col md:flex-row">
                                <img src="/images/picto/signal-status.png" alt="" class="w-7 mb-3 mr-3 md:h-7 md:mt-2">
                                <div class="flex flex-col">
                                    <p class="text-4xl font-bold">50K+</p>
                                    <p class="font-bold">Followers socials networks</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


        </main>

        <footer class="bg-black h-auto ">
            <div class=" -mt-28 w-10/12 ml-6 pt-16 bg-red-600 rounded-[18px] my-4 z-2 flex flex-col px-8" >
                <h2 class="text-white font-bold text-4xl my-4 lg:hidden">Engage Users wherever they Go</h2>
                <form action="" method="POST" class="lg:hidden">
                    <input type="mail" name="email" value="Your Email Address" class="w-64 text-gray-600 border-2 rounded-full bg-white border-white rounded-full px-8 pt-2 pb-3 mt-2">
                    <button class="w-48 text-white border-2 rounded-full bg-black border-black rounded-full px-8 pt-2 pb-3 mt-2 mb-4">Purchase </button>
                    <p class="text-white text-sm pb-24">Leverage agile frameworks to provide a robust strategy.</p>
                </form>
                <div class="flex flex-row hidden lg:flex">
                    <div class="w-80 ml-6 mr-20">
                        <h2 class="text-white font-bold text-4xl my-4 ">Recevoir ma dose de motivation par mail</h2>
                    </div>
                    <div class="w-72">
                        <form action="" method="POST">

                            <input type="text" name="prenom" value="Prénom" class="w-96 text-white text-sm bg-red-600 border-white pt-2 pb-3 mt-2 border-b border-white ">
                            <input type="mail" name="email" value="Your E-mail" class="w-96 text-white text-sm bg-red-600 border-white pt-2 pb-3 mt-2 border-b border-white "></br>
                            <button class="w-36 text-white border-2 rounded-full bg-red-600 border-white rounded-full px-8 pt-2 pb-3 mt-2 mb-8">Go </button>
                            <p class="text-white justify-items-end ml-16 pb-24">Promis aucun spam, juste de quoi te motiver </p>
                        </form>
                    </div>
                </div>
                
            </div>

            <div class="flex flex-col ml-6 mt-20 lg:flex-row" >
                <div>
                    <img src="/images/LOGO-50K-POUR-CENT-4.png" class="lg:w-48 ">
                </div>
                <div class="text-white flex flex-col mx-20">
                    <p class="text-bold mb-6">Product</p>
                    <a href="" id="" class="text-xs mb-2">Clients</a>
                    <a href="" id="" class="text-xs mb-2">History</a>
                    <a href="" id="" class="text-xs mb-2">Team</a>
                    <a href="" id="" class="text-xs mb-2">FAQ</a>
                    <a href="" id="" class="text-xs mb-2">Get Quote</a>
                </div>

                <div class="text-white flex flex-col mx-20">
                    <p class="text-bold mb-6">Company</p>
                    <a href="" id="" class="text-xs mb-2">Clients</a>
                    <a href="" id="" class="text-xs mb-2">History</a>
                    <a href="" id="" class="text-xs mb-2">Team</a>
                    <a href="" id="" class="text-xs mb-2">FAQ</a>
                    <a href="" id="" class="text-xs mb-2">Get Quote</a>
                </div>

                <div class="text-white flex flex-col ml-12 mr-4 lg:w-4/12">
                    <p class="mb-6 font-bold">Suivez-moi sur les réseaux sociaux</p>
                    <div class="flex mb-6">
                        <img src="/images/picto/" alt="" class="">
                        <img src="/images/picto/instagram.png" alt="" class="w-6">
                    </div>
                    <div class="flex mb-6">
                        <img src="/images/picto/phone.png" class="w-9">
                        <p class="text-white font-bold">+33 6 14 22 23 30</p>
                    </div>
                    <p class="text-xs mb-8">Subscribe to our newsletter today to receive updates on the latest news, releases and special offers. We respect your privacy. Your information is safe.</p>

                    <form action="" method="POST" class="mr-4">

                        <input type="text" name="prenom" value="Prénom" class="w-80 text-white text-sm bg-black border-white pt-2 pb-3 mt-2 border-b border-white ">
                        <input type="mail" name="email" value="Your E-mail" class="w-80 text-white text-sm bg-black border-white pt-2 pb-3 mt-2 border-b border-white ">
                        <button class="w-36 text-white border-2 rounded-full bg-black border-white rounded-full px-8 pt-2 pb-3 mt-2 mb-8">Go </button>
                        
                    </form>




                </div>

                

            </div>

            <p class="text-gray-400 text-xs pb-24">©2022 50Kpourcentcoaching. All rights reserved by <a href="" class="font-bold">Darlow Paris</a> | <a href="" class="font-bold">Mentions légales</a> </p>

        </footer>


    </body>