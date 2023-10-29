 <?php
echo '
<!DOCTYPE html>
<html>
  <head>
    <title>Recipe App</title>
	<link rel="stylesheet" href="recipeStyle.css">
  </head>
  <body>
    <nav>
	  <h1>Recipe App</h1>
    </nav>
    <div class="container">
	   <!-- Add recipes form -->
       <div class="left-column">
        <h3>Add Recipe</h3>
        <form>
          <label for="recipe-name">Name:</label>
          <input type="text" id="recipe-name" required>
          <br>
          <label for="recipe-ingredients">Ingredients:</label>
          <textarea id="recipe-ingredients" rows="5" required></textarea>
          <br>
          <label for="recipe-method">Method:</label>
          <textarea id="recipe-method" rows="5" required></textarea>
          <br>
          <button type="submit">Add Recipe</button>
        </form>
      </div>
	  <!-- Search bar/view recipes list -->
	  <div class="right-column">
		<div id="search-section">
          <h3>Recipes List</h3>
          <label for="search-box">Search:</label>
          <input type="text" id="search-box">
        </div>
        <div id="recipe-list"></div>
		<div id="no-recipes">You have no recipes.</div>
      </div>
    </div>
    <script src="recipeScript.js"></script>
  </body>
</html>
';
?>