<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app.name')}}</title>
    <script>
        function display(){
            let inputed = document.querySelector('input').value;
            let child = document.createElement('li')
            child.textContent = inputed
            document.querySelector('.todos ul').appendChild(child)
            document.querySelector('input[name="todo"]').value = ""
        }
    </script>
</head>
<body>
    <main>
        <div class="top">
            <input type="text" name="todo" id="" placeholder="Add your Todo ..">
            <button onclick="display()">+</button>
        </div>
        <div class="todos">
            <ul></ul>
        </div>
    </main>
</body>
</html>