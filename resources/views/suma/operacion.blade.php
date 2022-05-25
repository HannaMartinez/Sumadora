<form action="{{ url('/suma') }}" method="post">
  @csrf
    
    <h1>Suma</h1>
      <input name="numero1" type="text">
      <br>
      <br>
      <input name="numero2" type="text">
      <br>
      <br>
      <input type="submit" value="Envar">
    </form>