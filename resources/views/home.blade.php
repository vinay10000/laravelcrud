<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            overflow: hidden;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background: #0f172a;
            color: #e2e8f0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        body.auth {
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 1rem;
            padding: 1rem;
            align-items: start;
        }

        .left-sidebar {
            position: sticky;
            top: 2rem;
            height: calc(100vh - 2rem);
            overflow-y: auto;
        }

        .posts-section {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 0.5rem;
            height: calc(100vh - 2rem);
        }

        .posts-section .header {
            position: sticky;
            top: 0;
            width: 100%;
            max-width: 500px;
            padding: 1rem 0;
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            z-index: 10;
            margin-bottom: 2rem;
            border-radius: 16px;
            padding: 1.5rem;
            border: 1px solid rgba(51, 65, 85, 0.5);
        }

        .posts-section .header h1 {
            margin: 0;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .posts-container {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-y: auto;
            padding-right: 0.5rem;
        }

        button {
            width: 100%;
            height: 44px;
            background: linear-gradient(145deg, #3b82f6, #2563eb);
            color: #fff;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 0 1.5rem;
            box-shadow: 0 2px 10px rgba(37, 99, 235, 0.2);
            letter-spacing: 0.02em;
        }

        button:hover {
            background: linear-gradient(145deg, #2563eb, #1d4ed8);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
        }

        button:active {
            transform: translateY(1px);
        }

        h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-align: center;
            background: linear-gradient(to right, #60a5fa, #3b82f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        form {
            width: 90%;
            max-width: 400px;
            padding: 2rem;
            background: #1e293b;
            border-radius: 12px;
            border: 1px solid #334155;
            margin: 0 auto 2rem auto;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        textarea {
            width: 100%;
            height: 44px;
            margin-bottom: 1rem;
            padding: 0.75rem 1rem;
            background: rgba(15, 23, 42, 0.6);
            border: 1px solid rgba(51, 65, 85, 0.8);
            border-radius: 8px;
            font-size: 1rem;
            color: #e2e8f0;
            transition: all 0.3s ease;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        textarea {
            min-height: 120px;
            width: 100%;
            border-radius: 8px;
            resize: vertical;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        textarea:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
            background: rgba(15, 23, 42, 0.8);
        }

        input[type="submit"] {
            width: 100%;
            height: 44px;
            background: #3b82f6;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s ease;
            padding: 0 1.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        input[type="submit"]:hover {
            background: #2563eb;
            transform: translateY(-1px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        input[type="submit"]:active {
            transform: translateY(1px);
        }

        ::placeholder {
            color: #666;
        }

        body>div {
            width: 100%;
            padding: 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        @media (min-width: 768px) {
            body {
                padding: 2rem;
            }

            body:not(.auth) {
                flex-direction: row;
                gap: 2rem;
                align-items: flex-start;
            }

            form {
                margin: 0;
            }
        }

        @media (max-width: 767px) {
            h1 {
                font-size: 2rem;
            }

            form {
                padding: 1.5rem;
            }

            body.auth {
                grid-template-columns: 1fr;
                overflow-y: auto;
            }

            .left-sidebar,
            .posts-section {
                height: auto;
                overflow-y: visible;
            }
        }

        .post {
            background: linear-gradient(145deg, #1e293b, #1a2234);
            border: 1px solid rgba(51, 65, 85, 0.5);
            border-radius: 16px;
            padding: 1.5rem;
            margin-bottom: 1rem;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            width: 100%;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
        }

        .post:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 24px rgba(0, 0, 0, 0.25);
        }

        .post h2 {
            color: #60a5fa;
            margin-bottom: 1rem;
            font-size: 1.4rem;
            font-weight: 600;
            letter-spacing: -0.02em;
        }

        .post p {
            color: #cbd5e1;
            line-height: 1.7;
            font-size: 1.05rem;
            margin: 0;
            word-wrap: break-word;
            white-space: pre-wrap;
            max-height: 300px;
            overflow-y: auto;
        }

        .post p::-webkit-scrollbar {
            width: 6px;
        }

        .post p::-webkit-scrollbar-track {
            background: #1e293b;
            border-radius: 3px;
        }

        .post p::-webkit-scrollbar-thumb {
            background: #475569;
            border-radius: 3px;
        }

        .post p::-webkit-scrollbar-thumb:hover {
            background: #64748b;
        }

        .posts-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 0.5rem;
            height: calc(100vh - 2rem);
        }

        .posts-section h1 {
            width: 100%;
            max-width: 500px;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        /* Webkit browsers (Chrome, Safari, newer Edge) */
        .posts-section::-webkit-scrollbar {
            width: 8px;
        }

        .posts-section::-webkit-scrollbar-track {
            background: #1e293b;
            border-radius: 4px;
        }

        .posts-section::-webkit-scrollbar-thumb {
            background: #475569;
            border-radius: 4px;
            transition: background 0.2s ease;
        }

        .posts-section::-webkit-scrollbar-thumb:hover {
            background: #64748b;
        }

        /* Firefox */
        .posts-section {
            scrollbar-width: thin;
            scrollbar-color: #475569 #1e293b;
        }

        /* Apply the same styles to left-sidebar if needed */
        .left-sidebar::-webkit-scrollbar {
            width: 8px;
        }

        .left-sidebar::-webkit-scrollbar-track {
            background: #1e293b;
            border-radius: 4px;
        }

        .left-sidebar::-webkit-scrollbar-thumb {
            background: #475569;
            border-radius: 4px;
        }

        .left-sidebar::-webkit-scrollbar-thumb:hover {
            background: #64748b;
        }

        .left-sidebar {
            scrollbar-width: thin;
            scrollbar-color: #475569 #1e293b;
        }

        @media (max-width: 900px) {
            body.auth {
                grid-template-columns: 1fr;
            }
        }

        .post .actions {
            display: flex;
            gap: 0.75rem;
            margin-top: 1.5rem;
            border-top: 1px solid rgba(51, 65, 85, 0.5);
            padding-top: 1.5rem;
        }

        .post .actions form {
            margin: 0;
            padding: 0;
            background: none;
            border: none;
            box-shadow: none;
            width: 100%;
            flex: 1;
            display: flex;
        }

        .post .actions a,
        .post .actions button {
            flex: 1;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            padding: 0.5rem 1.5rem;
            border-radius: 12px;
            font-size: 0.9rem;
            font-weight: 500;
            transition: all 0.3s ease;
            height: 38px;
            min-width: 100px;
            width: 100%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .post .actions a {
            background: linear-gradient(145deg, #3b82f6, #2563eb);
        }

        .post .actions button {
            background: linear-gradient(145deg, #ef4444, #dc2626);
            border: none;
        }

        .post .actions a:hover {
            background: linear-gradient(145deg, #2563eb, #1d4ed8);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
        }

        .post .actions button:hover {
            background: linear-gradient(145deg, #dc2626, #b91c1c);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
        }
    </style>
</head>

<body @guest class="guest" @endguest>
    @auth
        <div class="left-sidebar">
            <h1>Welcome {{ auth()->user()->name }}</h1>
            <form action="/logout" method="POST">
                @csrf
                <button>Logout</button>
            </form>
            <div>
                <h2>Create a new post</h2>
                <form action="/create-post" method="post">
                    @csrf
                    <input type="text" name="title" placeholder="Title">
                    <textarea name="body" placeholder="POST CONTENT"></textarea>
                    <input type="submit" value="Create">
                </form>
            </div>
        </div>
        <div class="posts-section">
            <div class="header">
                <h1>All Posts</h1>
            </div>
            <div class="posts-container">
                @foreach ($posts as $post)
                    <div class="post">
                        <h2>{{ $post->title }} by @ {{$post->user->name}}</h2>
                        <p>{{ $post->body }}</p>
                        <div class="actions">
                            <form action="/edit-post/{{ $post->id }}" method="GET" style="margin: 0;">
                                <button type="submit" style="background: linear-gradient(145deg, #3b82f6, #2563eb);">Edit</button>
                            </form>
                            <form action="/delete-post/{{ $post->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button style="background: linear-gradient(145deg, #ef4444, #dc2626);">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div>
            <h1>Register</h1>
            <form action="/register" method="post">
                @csrf
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <input type="submit" value="Register">
            </form>
        </div>
        <div>
            <h1>Login</h1>
            <form action="/login" method="post">
                @csrf
                <input type="text" name="loginname" placeholder="Name">
                <input type="password" name="loginpassword" placeholder="Password">
                <input type="submit" value="login">
            </form>
        </div>
    @endauth
</body>

</html>
