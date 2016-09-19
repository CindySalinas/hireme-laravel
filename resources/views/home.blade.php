@extends('layout')

@section('content')
<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
  <div class="container">
    <h1>HireMe!</h1>
    <p>Proyecto de PHP y Laravel para buscar programadores</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Postulate</a></p>
  </div>
</div>

<div class="container">
  <!-- Example row of columns -->
  <h3>Ultimos Candidatos</h3>
  <h4>Backend Developers</h4>
  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Tipo de Trabajo</th>
        <th>Descripcion</th>
        <th>Ver</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Cindy Salinas</td>
        <td>FullStack Developer</td>
        <td>I'm web developer</td>
        <td><button type="button" class="btn btn-primary">Ver</button></td>
      </tr>
    </tbody>
  </table>

  <a href="#" class="text-primary">Ver todos los candidatos</a>

</div> <!-- /container -->

@stop