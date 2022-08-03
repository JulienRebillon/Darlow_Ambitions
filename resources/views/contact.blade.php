<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
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
                            
                            <a href="#"><li><img src="/images/tarifs/2.png" class="w-36"></li></a>

                            <a href="{{ route('apropos') }}"><li class="my-2 text-black">A propos</li></a>
                            <a href="{{ route('tarifs') }}"><li class="my-2 text-black">Tarifs</li></a>
                            <a href="{{ route('blog') }}"><li class="my-2 text-black font-bold">Blog</li></a>
                            <a href="{{ route('avis') }}"><li class="my-2 text-black">Avis</li></a>
                            <a href="{{ route('contact') }}"><li class="mt-2 mb-6  text-black">Contact</li></a>
                            <div class="flex">
                                <img src="/images/picto/icons8-search-58.png" alt="" class="w-6 h-6 mx-2 mt-2">
                    
                                <a href="{{ route('contact') }}" class="">
                                    <div class="flex w-50 text-white border-red rounded bg-red-500 px-4 pt-2 pb-3">
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
                    <div class=" w-2 h-2 rounded bg-black-900 hover:bg-red-700"></div></a>

                    <a href="{{ route('tarifs') }}" class="text-black">Tarifs<br/>
                        <div class=" w-2 h-2 rounded bg-black-900 hover:bg-red-600"></div></a>

                    <a href="{{ route('blog') }}" class="text-black">Blog<br/>
                        <div class=" w-2 h-2 rounded bg-red-700"></div></a>
                    
                    <a href="{{ route('avis') }}" class="text-black">Avis<br/>
                        <div class=" w-2 h-2 rounded bg-black-900 hover:bg-red-700"></div></a>

                    <a href="{{ route('contact') }}" class="text-black">contact<br/>
                        <div class=" w-2 h-2 rounded bg-black-900 hover:bg-red-700"></div></a>

                    <img src="/images/picto/icons8-search-58.png" alt="" class="">
                    
                    <a href="{{ route('contact') }}" class="">
                        <div class="flex w-50 text-white border-red rounded-full bg-red-600 px-4 pt-2 pb-3">
                            <img src="/images/picto/phone.png" class="w-6 mr-2">
                            <p class="text-white">+800 100 900</p>
                        </div>
                    </a>
                </div>
            </div>
        </header>





        <main>
            <div id="section_1" class="flex flex-col bg-[#191C51] pl-6 ">
                <p class="text-lg text-gray-500 font-bold mt-28 mb-4">NEWS</p>
                <h1 class="text-4xl font-bold lg:text-6xl text-white mb-6">Check mon blog</h1>
                <p class="text-white mb-28">Motivation, business, livres à suivre..Tout ce que tu dois savoir pour ton business</p>
            </div>

            <div id="section_2" class="flex flex-col bg-white px-8 py-8 items-center">

                <div class="flex flex-col lg:flex-row-reverse items-center">
                    <div class="w-9/12 md:w-72 relative bg-black rounded-2xl mb-4 lg:mt-0">
                        <div class="absolute w-72 bg-bradient-to-b from-white to-black  rounded-2xl z-1"></div>
                        <img src="/images/Blog/post_02-1280x1200.jpg" alt="" class="rounded-2xl opacity-1  hover:opacity-40">
                        <h4 class="absolute text-white text-2xl ml-6 top-[60%]"> Retail Business Help Through Consulting Services</h4>
                        <div class="mt-2 hidden">
                            <img src="/images/picto/right-arrow.png" alt="" class="ml-6 w-6 h-6">
                        </div>
                    </div>
                    <div class="w-9/12 md:w-72 relative bg-black rounded-2xl mr-4 mb-4 lg:mt-8">
                        <div class="absolute w-72 bg-bradient-to-b from-white to-black  rounded-2xl z-1"></div>
                        <img src="/images/Blog/post_01-1280x1200.jpg" alt="" class="rounded-2xl opacity-1  hover:opacity-40">
                        <h4 class="absolute text-white text-2xl ml-6 top-[60%]">Consulting Fees Study 2019 (And How To Raise Your Rates)</h4>
                        <div class="mt-2 hidden">
                            <img src="/images/picto/right-arrow.png" alt="" class="ml-6 w-6 h-6">
                        </div>
                    </div>
                    <div class="w-9/12 md:w-72 relative bg-black rounded-2xl mr-4 mb-4 lg:mt-16">
                        <div class="absolute w-72 bg-bradient-to-b from-white to-black  rounded-2xl z-1"></div>
                        <img src="/images/Blog/post_03-1280x1200.jpg" alt="" class="rounded-2xl opacity-1  hover:opacity-40">
                        <h4 class="absolute text-white text-2xl ml-6 top-[60%]">Guide How to Productize Consulting Services</h4>
                        <div class="mt-2 hidden">
                            <img src="/images/picto/right-arrow.png" alt="" class="ml-6 w-6 h-6">
                        </div>
                    </div>
                </div>


                <div class="flex flex-col lg:flex-row-reverse items-center">
                    <div class="w-9/12 md:w-72 relative bg-black rounded-2xl mb-4 lg:mt-0">
                        <div class="absolute w-72 bg-bradient-to-b from-white to-black  rounded-2xl z-1"></div>
                        <img src="/images/Blog/post_04-1280x1200.jpg" alt="" class="rounded-2xl opacity-1  hover:opacity-40">
                        <h4 class="absolute text-white text-2xl ml-6 top-[60%]">How To Achieve Success as A New Consultant</h4>
                        <div class="mt-2 hidden">
                            <img src="/images/picto/right-arrow.png" alt="" class="ml-6 w-6 h-6">
                        </div>
                    </div>
                    <div class="w-9/12 md:w-72 relative bg-black rounded-2xl mr-4 mb-4 lg:mt-8">
                        <div class="absolute w-72 bg-bradient-to-b from-white to-black  rounded-2xl z-1"></div>
                        <img src="/images/Blog/post_06-1280x1200.jpg" alt="" class="rounded-2xl opacity-1  hover:opacity-40">
                        <h4 class="absolute text-white text-2xl ml-6 top-[60%]"> Health & Wellness For Consultants Study 2020</h4>
                        <div class="mt-2 hidden">
                            <img src="/images/picto/right-arrow.png" alt="" class="ml-6 w-6 h-6">
                        </div>
                    </div>
                    <div class="w-9/12 md:w-72 relative bg-black rounded-2xl mr-4 mb-4 lg:mt-16">
                        <div class="absolute w-72 bg-bradient-to-b from-white to-black  rounded-2xl z-1"></div>
                        <img src="/images/Blog/post_05-1280x1200.jpg" alt="" class="rounded-2xl opacity-1  hover:opacity-40">
                        <h4 class="absolute text-white text-2xl ml-6 top-[60%]">3 Great Reasons To Use A Small Business Consultant</h4>
                        <div class="mt-2 hidden">
                            <img src="/images/picto/right-arrow.png" alt="" class="ml-6 w-6 h-6">
                        </div>
                    </div>
                </div>


                <div class="flex flex-col lg:flex-row-reverse items-center">
                    <div class="w-9/12 md:w-72 relative bg-black rounded-2xl mb-4 lg:mt-0">
                        <div class="absolute w-72 bg-bradient-to-b from-white to-black  rounded-2xl z-1"></div>
                        <img src="/images/Blog/post_06-1280x1200.jpg" alt="" class="rounded-2xl opacity-1  hover:opacity-40">
                        <h4 class="absolute text-white text-2xl ml-6 top-[60%]"> How Marketing Consultants Help A Business</h4>
                        <div class="mt-2 hidden">
                            <img src="/images/picto/right-arrow.png" alt="" class="ml-6 w-6 h-6">
                        </div>
                    </div>
                    <div class="w-9/12 md:w-72 relative bg-black rounded-2xl mr-4 mb-4 lg:mt-8">
                        <div class="absolute w-72 bg-bradient-to-b from-white to-black  rounded-2xl z-1"></div>
                        <img src="/images/Blog/post_01-1280x1200.jpg" alt="" class="rounded-2xl opacity-1  hover:opacity-40">
                        <h4 class="absolute text-white text-2xl ml-6 top-[60%]"> Do Startups Benefits From Business Consulting?</h4>
                        <div class="mt-2 hidden">
                            <img src="/images/picto/right-arrow.png" alt="" class="ml-6 w-6 h-6">
                        </div>
                    </div>
                    <div class="w-9/12 md:w-72 relative bg-black rounded-2xl mr-4 mb-4 lg:mt-16">
                        <div class="absolute w-72 bg-bradient-to-b from-white to-black  rounded-2xl z-1"></div>
                        <img src="/images/Blog/post_09-1280x1200.jpg" alt="" class="rounded-2xl opacity-1  hover:opacity-40">
                        <h4 class="absolute text-white text-2xl ml-6 top-[60%]">Get Fast Results With Marketing Consulting</h4>
                        <div class="mt-2 hidden">
                            <img src="/images/picto/right-arrow.png" alt="" class="ml-6 w-6 h-6">
                        </div>
                    </div>
                </div>


                <div class="flex flex-col lg:flex-row-reverse items-center">
                    <div class="w-9/12 md:w-72 relative bg-black rounded-2xl mb-4 lg:mt-0">
                        <div class="absolute w-72 bg-bradient-to-b from-white to-black  rounded-2xl z-1"></div>
                        <img src="/images/Blog/post_08-1280x1200.jpg" alt="" class="rounded-2xl opacity-1  hover:opacity-40">
                        <h4 class="absolute text-white text-2xl ml-6 top-[60%]"> How to Scale Your Consulting Business to $1M</h4>
                        <div class="mt-2 hidden">
                            <img src="/images/picto/right-arrow.png" alt="" class="ml-6 w-6 h-6">
                        </div>
                    </div>
                    <div class="w-9/12 md:w-72 relative bg-black rounded-2xl mr-4 mb-4 lg:mt-8">
                        <div class="absolute w-72 bg-bradient-to-b from-white to-black  rounded-2xl z-1"></div>
                        <img src="/images/Blog/post_09-1280x1200.jpg" alt="" class="rounded-2xl opacity-1  hover:opacity-40">
                        <h4 class="absolute text-white text-2xl ml-6 top-[60%]"> 4 Ways To Get Your First Consulting Client</h4>
                        <div class="mt-2 hidden">
                            <img src="/images/picto/right-arrow.png" alt="" class="ml-6 w-6 h-6">
                        </div>
                    </div>
                    <div class="w-9/12 md:w-72 relative bg-black rounded-2xl mr-4 mb-4 lg:mt-16">
                        <div class="absolute w-72 bg-bradient-to-b from-white to-black  rounded-2xl z-1"></div>
                        <img src="/images/Blog/post_10-1280x1200.jpg" alt="" class="rounded-2xl opacity-1  hover:opacity-40">
                        <h4 class="absolute text-white text-2xl ml-6 top-[60%]">Simple Steps to Win More Consulting Projects</h4>
                        <div class="mt-2 hidden">
                            <img src="/images/picto/right-arrow.png" alt="" class="ml-6 w-6 h-6">
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-black h-auto ">
            

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
                    <a href="" id="" class="text-xs mb-16">Get Quote</a>
                </div>

                <div class="text-white flex flex-col mx-20">
                    <p class="text-bold mb-6">Company</p>
                    <a href="" id="" class="text-xs mb-2">Clients</a>
                    <a href="" id="" class="text-xs mb-2">History</a>
                    <a href="" id="" class="text-xs mb-2">Team</a>
                    <a href="" id="" class="text-xs mb-2">FAQ</a>
                    <a href="" id="" class="text-xs mb-16">Get Quote</a>
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