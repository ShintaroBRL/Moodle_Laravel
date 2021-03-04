<div class="menu">
    <ul class="list">
        <li class="header">MAIN NAVIGATION</li>
        <li class={{($title == "Home")? "active" : "" }}>
            <a href="/home">
                <i class="material-icons">home</i>
                <span>Home</span>
            </a>
        </li>
        <li>
            <a href="/trabalhos">
                <i class="material-icons">assignment</i>
                <span>Trabalhos</span>
            </a>
        </li>
        <li>
            <a href="/conteudos">
                <i class="material-icons">book</i>
                <span>Conteudos</span>
            </a>
        </li>
        <li>
            <a href="/avaliacoes">
                <i class="material-icons">announcement</i>
                <span>Avaliações</span>
            </a>
        </li>
        @if ($user_type == "-1")
            <li class="<?php echo ($title == "Usuarios")? "active" : "" ; ?>">
                <a href="/usuarios">
                    <i class="material-icons">folder_shared</i>
                    <span>Usuarios</span>
                </a>
            </li>
        @endif
    </ul>
</div>