<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background: #0f172a;
            color: #e2e8f0;
            min-height: 100vh;
            margin: 0;
            padding: 2rem;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
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
            background: #1e293b;
            border-radius: 16px;
            border: 1px solid #334155;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .mb-3 {
            margin-bottom: 1.5rem;
        }

        .form-label {
            color: #cbd5e1;
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        input[type="text"],
        textarea {
            width: 100%;
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
            resize: vertical;
        }

        input[type="text"]:focus,
        textarea:focus {
            outline: none;
            border-color: #3b82f6;
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
            background: rgba(15, 23, 42, 0.8);
        }

        .btn-primary {
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

        .btn-primary:hover {
            background: linear-gradient(145deg, #2563eb, #1d4ed8);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
        }

        .btn-primary:active {
            transform: translateY(1px);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Post</h1>
        <form action="/edit-post/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Post Title</label>
                <input type="text" name="title" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Post Content</label>
                <textarea name="body" rows="10">{{ $post->body }}</textarea>
            </div>
            <button type="submit" class="btn-primary">Update Post</button>
        </form>
    </div>
</body>
</html>