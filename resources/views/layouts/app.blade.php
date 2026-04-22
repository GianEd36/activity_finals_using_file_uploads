<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinnamoroll Book Library</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet">
    <style>

        .gallery-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            justify-content: center;
            padding: 20px;
        }

        .photo-cloud {
            background: white;
            padding: 10px;
            border-radius: 30px;
            border: 3px solid var(--cinna-blue);
            box-shadow: 0 8px 15px rgba(174, 225, 249, 0.2);
            transition: transform 0.3s;
        }

        .photo-cloud:hover {
            transform: translateY(-5px) rotate(2deg);
        }

        .cinna-header {
            width: 150px;
            display: block;
            margin: 0 auto 10px;
        }

        .cinnamoroll-mascot {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 150px;
            z-index: 1000;
            pointer-events: none; /* So it doesn't block buttons */
        }

        .header-image {
            display: block;
            margin: 0 auto 10px auto;
            width: 120px;
        }

        :root {
            --cinna-blue: #AEE1F9;
            --cinna-dark-blue: #5BA6D0;
            --cinna-pink: #F9C8D9;
            --cloud-white: #FFFFFF;
        }

        body {
            background-color: #E3F4FD;
            font-family: 'Quicksand', sans-serif;
            color: var(--cinna-dark-blue);
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
        }

        .main-container {
            width: 100%;
            max-width: 800px;
            background: rgba(255, 255, 255, 0.6);
            padding: 30px;
            border-radius: 40px;
            border: 5px solid var(--cinna-blue);
        }

        h1 {
            text-align: center;
            font-size: 2.5rem;
            color: var(--cinna-dark-blue);
            text-shadow: 2px 2px white;
        }

        .btn {
            display: inline-block;
            padding: 10px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: transform 0.2s, background 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn:hover { transform: scale(1.05); }

        .btn-primary { background: var(--cinna-blue); color: white; border: 2px solid var(--cinna-dark-blue); }
        .btn-primary:hover { background: var(--cinna-pink); }
        
        .btn-danger { background: var(--cinna-pink); color: white; margin-left: 10px; }

        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0 20px 0;
            border-radius: 15px;
            border: 2px solid var(--cinna-blue);
            font-family: 'Quicksand', sans-serif;
            box-sizing: border-box;
        }
        /* Custom Cinnamoroll Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            gap: 10px;
        }

        .pagination li {
            display: inline;
        }

        .pagination li a, .pagination li span {
            background: white;
            color: var(--cinna-dark-blue);
            padding: 10px 18px;
            border-radius: 50%; /* Makes them circular like little bubbles */
            text-decoration: none;
            border: 2px solid var(--cinna-blue);
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .pagination li a:hover {
            background: var(--cinna-pink);
            color: white;
            border-color: var(--cinna-pink);
            transform: scale(1.1);
        }

        .pagination .active span {
            background: var(--cinna-blue);
            color: white;
            border-color: var(--cinna-dark-blue);
            cursor: default;
        }

        .pagination .disabled span {
            color: #ccc;
            border-color: #eee;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <img src="https://i.pinimg.com/736x/00/29/40/002940afce360bf67501ed855f0d8803.jpg" class="cinnamoroll-mascot" alt="Cinna">

    <div class="main-container">
        <img src="https://static.wikia.nocookie.net/hellokitty/images/a/a5/Mv-cinnamon.png/revision/latest?cb=20250930161135" class="header-image">
        @yield('content')
    </div>
</body>
</html>