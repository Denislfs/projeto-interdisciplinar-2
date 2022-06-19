<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Importando Script tailwindcss-->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Style -->
    <link rel="stylesheet" href="../assets/style/home.css" />
    <!--Importando Script-->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!--Importando main js -->
    <script language="JavaScript" src="../js/main.js"></script>
    <!--Importando Script Jquery-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
</head>

<body>
    <!--Navbar-->
    <nav class="flex items-center place-content-around rounded-md">
        <div>
            <h3>LOGO</h3>
        </div>
        <div>
            <ul class="flex items-center justify-center gap-x-16 py-12 text-gray-500">
                <li>
                    <a href="../../index.php">Home</a>
                </li>
                <li class="flex items-center justify-center">
                    <a href="#">Serviços</a>
                    <div x-data="{ dropdownOpen: false }" class="relative">
                        <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md bg-white p-2 focus:outline-none">
                            <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>
                        <div x-show="dropdownOpen" class="absolute right-0 mt-1 py-2 w-48 bg-white rounded-md shadow-lg z-20 border border-gray-100">
                            <a href="../../src/screens/cadastroentreg.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-500 hover:text-white">
                                Seja um entregador
                            </a>
                            <a href="../../src/screens/cadastroest.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-500 hover:text-white">
                                Seja uma empresa parceira
                            </a>
                            <a href="../../src/screens/cadastropedido.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-500 hover:text-white">
                                Faça um pedido
                            </a>
                            <a href="../../src/screens/deletarentreg.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-500 hover:text-white">
                                Delete um entregador
                            </a>
                            <a href="../../src/screens/deletarest.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-500 hover:text-white">
                                Delete um estabelecimento
                            </a>
                            <a href="../../src/screens/deletarpedido.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-500 hover:text-white">
                                Delete um pedido
                            </a>
                            <a href="../../src/screens/atualizarentreg.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-500 hover:text-white">
                                Atualize um entregador
                            </a>
                            <a href="../../src/screens/atualizaest.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-500 hover:text-white">
                                Atualize um estabelecimento
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#">Quem somos</a>
                </li>
                <li>
                    <a href="#">Contato</a>
                </li>
            </ul>
        </div>
    </nav>
</body>

</html>