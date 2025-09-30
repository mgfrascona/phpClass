while ($row = mysqli_fetch_array($result)) {
$movieID = $row["MovieID"];
$movieTitle = $row["MovieTitle"];
$movieRating = $row["MovieRating"];

echo "<tr>";
    echo "        <td>$movieID</td>";
    echo "        <td>$movieTitle</td>";
    echo "        <td>$movieRating</td>";
    echo "</tr>";
}