<div class="flex h-screen bg-gray-100">

        <!-- Sidebar - fixa à esquerda, ocupa toda a altura e é responsiva -->
        <aside class="bg-gray-800 text-white w-64 space-y-6 py-7 px-2 fixed inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">
            
            <!-- Título ou logo da sidebar -->
            <a href="#" class="text-white text-2xl font-extrabold flex items-center px-4">
                Minha Sidebar
            </a>

            <!-- Navegação principal -->
            <nav>
                <ul class="space-y-2">
                    <li>
                        <!-- Link com efeito hover e padding -->
                        <a href="{{ route('formCalc') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-indigo-700 hover:text-white">
                            Calculadora
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('formAverage') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-indigo-700 hover:text-white">
                            Calcular média
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-indigo-700 hover:text-white">
                            Histórico
                        </a>
                    </li>
                    <li>
                        <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-indigo-700 hover:text-white">
                            Outra Opção
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>