<header>
    <nav id="navbar">
        <i class="fa-solid fa-feather" id="nav_logo">MercadoParalelo</i>

        <ul id="nav_list">
            <li class="nav_item active">
                <a href="">Início</a>
            </li>

            <li class="nav_item active">
                <a href="addProduto">Vender produto</a>
            </li>
        </ul>

        <button class="btn-default">
            Veja Mais
        </button>


    </nav>
</header>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    header {
        width: 100%;
        padding: 28px 8%;
    }

    #navbar {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    #nav_logo {

        font-size: 24px;
        color: rgb(48, 48, 138)
    }

    #nav_list {

        display: flex;
        list-style: none;
        gap: 48px;
    }

    .nav_item a {
        text-decoration: none;
        color: rgb(48, 48, 138);
        font-weight: 600;
    }

    .nav_item.active a {
        color: rgb(48, 48, 138);
        border-bottom: 3px solid rgb(48, 48, 138);
    }

    .btn-default {
        border: none;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        background-color: rgb(48, 48, 138);
        border-radius: 12px;
        padding: 10px 14px;
        font-weight: 600;
        box-shadow: 0px, 0px, 10px, 2px;
        cursor: pointer;
    }

    .btn-default:hover {
        background-color: rgb(77, 77, 164);
    }
</style>