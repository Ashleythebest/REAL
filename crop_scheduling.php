<?php
include("includes/init.php");

// open connection to database
$db = open_sqlite_db("secure/crop_scheduling.sqlite");

// An array to deliver messages to the user.
$messages = array();

function print_record($record) {
  ?>
  <tr>
    <td><?php echo htmlspecialchars($record["plant"]);?></td>
    <td><?php echo htmlspecialchars($record["category"]);?></td>
    <td><?php echo htmlspecialchars($record["low_temp"]);?></td>
    <td><?php echo htmlspecialchars($record["high_temp"]);?></td>
    <td><?php echo htmlspecialchars($record["low_ph"]);?></td>
    <td><?php echo htmlspecialchars($record["high_ph"]);?></td>
    <td><?php echo htmlspecialchars($record["lighting"]);?></td>
    <td><?php echo htmlspecialchars($record["time_harvest"]);?></td>
    <td><?php echo htmlspecialchars($record["num_addition"]);?></td>
    <td><?php echo htmlspecialchars($record["cost_1000_seed"]);?></td>
    <td><?php echo htmlspecialchars($record["market_value"]);?></td>
  </tr>
  <?php
}

// Search Form

const SEARCH_FIELDS =[
  "plant" => "By Plant",
  "category" => "By Category",
  "low_temp" => "By Low Temperature",
  "high_temp" => "By High Temperature",
  "low_ph" => "By Low ph",
  "high_ph" => "By high ph",
  "lighting" => "By Lighting (DLI)",
  "time_harvest" => "By Time to Harvest(weeks)",
  "num_addition" => "No. Additional Harvest",
  "cost_1000_seed" => "cost for 1000 seeds",
  "market_value" => "market value per crop"
];

if ( isset($_GET['search']) && isset($_GET['category_1']) ) {
  $do_search = TRUE;

  $category_1 = filter_input(INPUT_GET, 'category_1', FILTER_SANITIZE_STRING);

  // check if the category exists in the SEARCH_FIELDS array
  if (in_array($category_1, array_keys(SEARCH_FIELDS))) {
    $search_field = $category_1;
  } else {
    array_push($messages, "Invalid category for search.");
    $do_search = FALSE;
  }

  // Get the search terms
  $search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);
  $search = trim($search);
} else {
  // No search provided, so set the product to query to NULL
  $do_search = FALSE;
  $category_1 = NULL;
  $search = NULL;
}


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="styles/all.css"/>
<title>crop scheduling</title>
</head>

<body>
    <h1> REAL </h1>
    <h2> Crop Scheduling Tool </h2>
    <?php
    // Write out any messages to the user.
    foreach ($messages as $message) {
      echo "<p><strong>" . htmlspecialchars($message) . "</strong></p>\n";
    }
    ?>

    <form id="searchForm" action="crop_scheduling.php" method="get">
      <select name="category_1">
        <option value="" selected disabled>Search By</option>
        <?php
        foreach(SEARCH_FIELDS as $field_name => $label){
          ?>
          <option value="<?php echo $field_name;?>"><?php echo $label;?></option>
          <?php
        }
        ?>
      </select>
      <input type="text" name="search"/>
      <button type="submit">Search</button>
    </form>

    <?php
    if ($do_search) {
      // We have a specific shoe to query!
      ?>
      <h2>Search Results</h2>
      <?php

      // Be careful to filter $search_field above. If you're not careful, you can seriously break your database.
      // TODO: wildcard search using LIKE.
      $sql = "SELECT * FROM crop_scheduling WHERE ".$search_field." LIKE '%' || :search || '%'";
      $params = array(
        ':search' => $search
      );
    } else {
      // No shoe to query, so return everything!
      ?>
      <h2>All Vegetable</h2>
      <?php

      $sql = "SELECT * FROM crop_scheduling";
      $params = array();
    }

    // Get the shoes to display
    $result = exec_sql_query($db, $sql, $params);
    if ($result) {
      // The query was successful, let's get the records.
      $records = $result->fetchAll();

      if ( count($records) > 0 ) {
        // We have records to display
        ?>
        <table>
          <tr>
            <th>Plant</th>
            <th>Plant Category</th>
            <th>Low Temperature</th>
            <th>High Temperature</th>
            <th>Low pH</th>
            <th>High pH</th>
            <th>Lighting(DLI)</th>
            <th>Time to Harvest(weeks)</th>
            <th>No. Additional Weeks</th>
            <th>Cost for 1000 Seends</th>
            <th>Market Value Per Crop</th>

          </tr>

          <?php
          foreach($records as $record) {
            print_record($record);
          }
          ?>
        </table>
        <?php
      } else {
        // No results found
        echo "<p>No matching vegetables found.</p>";
      }
    }
    ?>
    <div class="back">
      <a href="index.php">BACK</a>
    </div>



  </div>

</body>

</html>
