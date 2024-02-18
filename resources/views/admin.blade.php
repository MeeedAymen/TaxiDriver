<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="">
<div class="flex flex-col  bg-gray-200 ">

   

    <!-- Contenu principal -->
    <div class="flex-1 flex flex-wrap">
        <!-- Barre de navigation latérale (masquée sur les petits appareils) -->
        <div class="shadow-xl p-2 bg-white h-screen  w-full md:w-60 flex flex-col md:flex" id="sideNav">
            <nav>
            
                <div class="flex items-center">
            <div class="flex items-center"> <!-- Affiché sur tous les appareils -->
                <a href="#" class="w-28 h-18 mr-2 text-3xl mx-10 mt-6 font-bold text-blue-500">
                    TaxiDriver
                </a>
            </div>
            <div class="md:hidden flex items-center"> <!-- Affiché uniquement sur les petits appareils -->
                <button id="menuBtn">
                    <i class="fas fa-bars text-gray-500 text-lg"></i> <!-- Icône de menu -->
                </button>
            </div>
        </div>
            <a href="{{url('adminprofil')}}" class="flex flex-col items-center mt-6 -mx-2">
                    <img class="object-cover w-24 h-24 mx-2 rounded-full" src="images/7O2A9833.JPG" alt="image">
                    <h4 class="mx-2 mt-2 font-medium text-gray-800">Mohamed Aymen Azza</h4>
                    <p class="mx-2 mt-1 text-sm font-medium text-gray-600">MohamedAymenAzza@gmail.com</p>
            </a>
            
                <div class="flex flex-col justify-between flex-1 mt-6">
                    <nav>
                        <a class="flex items-center px-4 py-2 text-gray-700 bg-gray-100 rounded-lg" href="#">
                            <svg class="w-6 h-6 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m4 12 8-8 8 8M6 10.5V19c0 .6.4 1 1 1h3v-3c0-.6.4-1 1-1h2c.6 0 1 .4 1 1v3h3c.6 0 1-.4 1-1v-8.5"/>
                              </svg>
            
                            <span class="mx-4 font-medium">User Home</span>
                        </a>
            
                        <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-gray-100 hover:text-gray-700" href="#">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
            
                            <span class="mx-4 font-medium">Accounts</span>
                        </a>
            
                        <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-gray-100 hover:text-gray-700" href="#">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
            
                            <span class="mx-4 font-medium">Reservations</span>
                        </a>
            
                        <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-gray-100 hover:text-gray-700" href="#">
                            <svg class="w-6 h-6 text-gray-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                              </svg>
                            <span class="mx-4 font-medium">Log out</span>
                        </a>
                    </nav>
            </nav>
            
            <!-- Droits d'auteur au bas de la navigation latérale -->
            <p class="block  mt-auto mb-1 px-5 py-3 text-left text-xs text-cyan-500">Copyright WCSLAT@2024</p>
        </div>

        <!-- Zone de contenu principal -->
        <div class="flex-1 h-screen overflow-y-auto  p-4 w-full md:w-1/2">
            <!-- Champ de recherche -->
            <div class="relative max-w-3xl mx-auto w-full">
                <div class="absolute top-1 left-2 inline-flex items-center p-2">
                    <i class="fas fa-search text-gray-400"></i>
                </div>
                <input class="shadow-xl	 w-full h-10 pl-10 pr-4 py-5 text-base placeholder-gray-500 border rounded-2xl focus:border focus:border-blue-500 outline-none focus:shadow-outline" type="search" placeholder="Rechercher...">
            </div>

            <!-- Conteneur des graphiques -->
            <div class="mt-8 flex flex-wrap space-x-0 space-y-2 md:space-x-4 md:space-y-0">
                <!-- Premier conteneur -->
                <!-- Section 1 - Graphique des Utilisateurs -->
                <div class="flex-1 bg-white p-4 shadow-xl rounded-lg md:w-1/2">
                    <h2 class="text-gray-500 text-lg font-semibold pb-1">Drivers number</h2>
                    <div class="my-1"></div> <!-- Espace de séparation -->
                    <div class="bg-blue-500 h-px mb-6"></div> <!-- Ligne avec dégradé -->
                    <div class="chart-container" style="position: relative; height:150px; width:100%">
                        <!-- Canvas pour le graphique -->
                        <canvas id="usersChart"></canvas>
                    </div>
                </div>

                <!-- Deuxième conteneur -->
                <!-- Section 2 - Graphique des passangers -->
                <div class="flex-1 bg-white p-4 shadow-xl rounded-lg md:w-1/2">
                    <h2 class="text-gray-500 text-lg font-semibold pb-1">passangers number</h2>
                    <div class="my-1"></div> <!-- Espace de séparation -->
                    <div class="bg-blue-500 h-px mb-6"></div> <!-- Ligne avec dégradé -->
                    <div class="chart-container" style="position: relative; height:150px; width:100%">
                        <!-- Canvas pour le graphique -->
                        <canvas id="commercesChart"></canvas>
                    </div>
                </div>
                <div class="flex-1 bg-white p-4 shadow-xl rounded-lg md:w-1/2">
                    <h2 class="text-gray-500 text-lg font-semibold pb-1">Trajets number</h2>
                    <div class="my-1"></div> <!-- Espace de séparation -->
                    <div class="bg-blue-500 h-px mb-6"></div> <!-- Ligne avec dégradé -->
                    <div class="chart-container" style="position: relative; height:150px; width:100%">
                        <!-- Canvas pour le graphique -->
                        <canvas id="commercesChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Troisième conteneur sous les deux précédents -->
            <!-- Section 3 - Tableau des Drivers -->
            <div class="mt-8 bg-white p-4 shadow-xl	 rounded-lg">
                <h2 class="text-gray-500 text-lg font-semibold pb-4">Drivers</h2>
                <div class="my-1"></div> <!-- Espace de séparation -->
                <div class="bg-blue-500 h-px mb-6"></div> <!-- Ligne avec dégradé -->
                <table class="w-full table-auto text-sm">
                    <thead>
                        <tr class="text-sm leading-normal">
                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Photo</th>
                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Nom</th>
                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Rôle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-2 px-4 border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Photo de Profil" class="rounded-full h-10 w-10"></td>
                            <td class="py-2 px-4 border-b border-grey-light">Juan Pérez</td>
                            <td class="py-2 px-4 border-b border-grey-light">Commerce</td>
                        </tr>
                        <!-- Ajoutez plus de lignes ici comme la précédente pour chaque autorisation en attente -->
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-2 px-4 border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Photo de Profil" class="rounded-full h-10 w-10"></td>
                            <td class="py-2 px-4 border-b border-grey-light">María Gómez</td>
                            <td class="py-2 px-4 border-b border-grey-light">Utilisateur</td>
                        </tr>
                        <!-- Continuer avec plus de lignes si nécessaire -->
                    </tbody>
                </table>
                <!-- Bouton "Voir plus" pour le tableau des Drivers -->
                <div class="text-right mt-4">
                    <a href="{{url('alldrivers')}}" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded">
                        Voir plus
                    </a>
                </div>
            </div>

            <!-- Quatrième conteneur -->
            <!-- Section 4 - Tableau des Passangers  -->
            <div class="mt-8 bg-white p-4 shadow-xl rounded-lg">
                <h2 class="text-gray-500 text-lg font-semibold pb-4">Passangers</h2>
                <div class="my-1"></div> <!-- Espace de séparation -->
                <div class="bg-blue-400 h-px mb-6"></div> <!-- Ligne avec dégradé -->
                <table class="w-full table-auto text-sm">
                    <thead>
                        <tr class="text-sm leading-normal">
                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Photo</th>
                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Nom</th>
                            <th class="py-2 px-4 bg-grey-lightest font-bold uppercase text-sm text-grey-light border-b border-grey-light">Rôle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-2 px-4 border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Photo de Profil" class="rounded-full h-10 w-10"></td>
                            <td class="py-2 px-4 border-b border-grey-light">Juan Pérez</td>
                            <td class="py-2 px-4 border-b border-grey-light">Commerce</td>
                        </tr>
                        <!-- Ajoutez plus de lignes ici comme la précédente pour chaque autorisation en attente -->
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-2 px-4 border-b border-grey-light"><img src="https://via.placeholder.com/40" alt="Photo de Profil" class="rounded-full h-10 w-10"></td>
                            <td class="py-2 px-4 border-b border-grey-light">María Gómez</td>
                            <td class="py-2 px-4 border-b border-grey-light">Utilisateur</td>
                        </tr>
                        <!-- Continuer avec plus de lignes si nécessaire -->
                    </tbody>
                </table>
                <!-- Bouton "Voir plus" pour le tableau des Passangers -->
                <div class="text-right mt-4">
                    <a href="{{url('allpassangers')}}" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded">
                        Voir plus
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
