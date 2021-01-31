<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mustii</title>
</head>
<body>
    <h1>Bienvenue</h1>
    <h2>Liste des projets</h2>


    @foreach($projects as $project)
        <h3>Projet {{$project->id}}</h3>
        <ul>
            <li>Nom du projet: {{$project->title}}</li>
            <li>Description du projet: {{$project->description}}</li>
            <li>Image du projet : {{$project->image}}</li>
            <li>lien du projet : {{$project->link}}</li>
        </ul>
    @endforeach

    <h2>Formulaire</h2>

    <form action="/" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Votre nom" value="{{ old('name') }}">
        <input type="email" name="email" placeholder="Votre email" value="{{ old('email') }}">
        <input type="text" name="subject" placeholder="Sujet" value="{{ old('subject') }}">
        <textarea name="description" placeholder="Votre demande" ></textarea>
        <input type="submit" name="submit">
    </form>

    @error("name")
        <p>{{$message}}</p>
    @enderror
</body>
</html>
