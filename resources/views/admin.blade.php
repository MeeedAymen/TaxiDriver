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
                <div class="flex flex-col items-center mt-6 -mx-2">
                    <img class="object-cover w-24 h-24 mx-2 rounded-full" src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80" alt="avatar">
                    <h4 class="mx-2 mt-2 font-medium text-gray-800">John Doe</h4>
                    <p class="mx-2 mt-1 text-sm font-medium text-gray-600">john@example.com</p>
                </div>
            
                <div class="flex flex-col justify-between flex-1 mt-6">
                    <nav>
                        <a class="flex items-center px-4 py-2 text-gray-700 bg-gray-100 rounded-lg" href="#">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
            
                            <span class="mx-4 font-medium">Dashboard</span>
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
            
                            <span class="mx-4 font-medium">Tickets</span>
                        </a>
            
                        <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform rounded-lg hover:bg-gray-100 hover:text-gray-700" href="#">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
            
                            <span class="mx-4 font-medium">Log out</span>
                        </a>
                    </nav>
            </nav>
            
            <!-- Droits d'auteur au bas de la navigation latérale -->
            <p class="block  mt-auto mb-1 px-5 py-3 text-left text-xs text-cyan-500">Copyright WCSLAT@2023</p>
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
                    <button class="bg-blue-400 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
                        Voir plus
                    </button>
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
                    <button class="bg-blue-400 hover:bg-cyan-600 text-white font-semibold py-2 px-4 rounded">
                        Voir plus
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
