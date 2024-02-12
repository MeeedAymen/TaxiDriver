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
<body class="flex flex-col  bg-gray-200">
    <div class="flex-1 flex-row flex-wrap">
        <div class="relative max-w-3xl mt-5 mx-auto w-full">
            <div class="absolute top-1 left-2 inline-flex items-center p-2">
                <i class="fas fa-search text-gray-400"></i>
            </div>
            <input class="shadow-xl	 w-full h-10 pl-10 pr-4 py-5 text-base placeholder-gray-500 border rounded-2xl focus:border focus:border-blue-500 outline-none focus:shadow-outline" type="search" placeholder="Rechercher...">
        </div>
    
        <!-- Section 1 - Tableau des Drivers -->
        <div class="mt-8 w-4/5 mx-auto bg-white p-4 shadow-xl rounded-lg">
            <h2 class="text-gray-500 text-lg font-semibold pb-4">All Drivers</h2>
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
            
        </div>

    </div>
</body>
</html>