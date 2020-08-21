<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./"><img src="{{ asset('dash/images/logo.png') }}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{ asset('dash/images/logo2.png') }}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href=""> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">Clientes</h3>
                <li>
                    <a href="{{ route('client.index') }}"> <i class="menu-icon ti-email"></i>Listar Clientes</a>
                </li>
                <li>
                    <a href="{{ route('client.create') }}"> <i class="menu-icon ti-email"></i>Cadastrar Novo </a>
                </li>
                <h3 class="menu-title">Frutas</h3>
                <li>
                    <a href="{{ route('fruit.index') }}"> <i class="menu-icon ti-email"></i>Listar Frutas</a>
                </li>
                <li>
                    <a href="{{ route('fruit.create') }}"> <i class="menu-icon ti-email"></i>Cadastrar Nova </a>
                </li>
                <li>
                    <a href="{{ route('stock.index') }}"> <i class="menu-icon ti-email"></i>Estoque </a>
                </li>
                <h3 class="menu-title">Vendas</h3>               
                <li>
                    <a href="{{ route('sale.index') }}"> <i class="menu-icon ti-email"></i>Listar Vendas</a>
                </li>
                <li>
                    <a href="{{ route('sale.create') }}"> <i class="menu-icon ti-email"></i>Cadastrar Nova </a>
                </li>
               
               

               
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->