<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Umadi | Full Stack Developer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            background-color: #f4f6f8;
            color: #333;
        }

        header {
            background-color: #004B93;
            color: white;
            padding: 2rem 1rem;
            text-align: center;
        }

        header img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid white;
            margin-bottom: 1rem;
        }

        nav {
            margin-top: 1rem;
        }

        nav a {
            margin: 0 1rem;
            color: white;
            text-decoration: none;
            font-weight: 500;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            max-width: 900px;
            margin: 2rem auto;
            padding: 1rem 2rem;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        section {
            margin-bottom: 2.5rem;
        }

        h2 {
            border-bottom: 2px solid #004B93;
            padding-bottom: 0.4rem;
            margin-bottom: 1rem;
            color: #004B93;
        }

        ul {
            padding-left: 1.2rem;
        }

        a {
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .contact p {
            margin: 0.3rem 0;
        }

        .contact i {
            margin-right: 0.5rem;
            color: #007BFF;
        }

        footer {
            text-align: center;
            padding: 1rem;
            background-color: #e5e5e5;
            font-size: 0.9rem;
        }

        @media (max-width: 600px) {
            nav {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }

            nav a {
                margin: 0.5rem;
            }

            header img {
                width: 100px;
                height: 100px;
            }
        }
    </style>
</head>

<body>
    <header>
        <!-- <img src="https://i.imgur.com/Ml0BYqn.jpg" alt="Foto Umadi" /> -->
        <h1>Umadi</h1>
        <p>Full Stack Developer | Laravel · React.js · Node.js · Android.java</p>
        <nav>
            <a href="#contact">Kontak</a>
            <a href="#resume">Resume</a>
            <a href="#portfolio">Portfolio</a>
        </nav>
    </header>