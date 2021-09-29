
<div align="center" style="width:100%;">
    <h1>Документация для Restaurans Api</h1>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>URL</th>
                <th>Method</th>
                <th>Тела</th>
                <th>Описание</th>
            </tr>
        </thead>
        <tbody>
            <tr><th colspan="4"><b>Restauran</b></th></tr>
            <tr>
                <th>/api/restaurans</th>
                <th>GET</th>
                <th>нет</th>
                <th>Получаем всю информацию в таблице restaurans</th>
            </tr>
            <tr>
                <th>/api/restaurans</th>
                <th>POST</th>
                <th>name,address</th>
                <th>Добавляем информацию в таблицу restaurans</th>
            </tr>
            <tr>
                <th>/api/restaurans/id</th>
                <th>GET</th>
                <th>нет</th>
                <th>Получаем информацию по id</th>
            </tr>
            <tr>
                <th>/api/restaurans/id</th>
                <th>POST/PUT</th>
                <th>_method=PUT,name,address</th>
                <th>Обновить информацию по id</th>
            </tr>
            <tr>
                <th>/api/restaurans/id</th>
                <th>POST/DELETE</th>
                <th>_method=DELETE</th>
                <th>Удалить информацию по id</th>
            </tr>
            <tr><th colspan="4"><b>Pizza</b></th></tr>
            <tr>
                <th>/api/pizzas</th>
                <th>GET</th>
                <th>нет</th>
                <th>Получаем всю информацию в таблице pizzas</th>
            </tr>
            <tr>
                <th>/api/pizzas</th>
                <th>POST</th>
                <th>name,address</th>
                <th>Добавляем информацию в таблицу pizzas</th>
            </tr>
            <tr>
                <th>/api/pizzas/id</th>
                <th>GET</th>
                <th>нет</th>
                <th>Получаем информацию по id</th>
            </tr>
            <tr>
                <th>/api/pizzas/id</th>
                <th>POST/PUT</th>
                <th>_method=PUT,name,address</th>
                <th>Обновить информацию по id</th>
            </tr>
            <tr>
                <th>/api/pizzas/id</th>
                <th>POST/DELETE</th>
                <th>_method=DELETE</th>
                <th>Удалить информацию по id</th>
            </tr>
        </tbody>
    </table>
</div>