<!-- DELETE -->
<section id="delete" class="content">
    <h2>Delete Student</h2>
    <form method="post" action="">
        <input type="number" name="id" placeholder="Student ID" required>
        <button type="submit" name="delete">Delete</button>
    </form>
    <?php
    if(isset($_POST['delete'])){
        $id = intval($_POST['id']); // sanitize input

        // prepared statement para safe
        $stmt = $conn->prepare("DELETE FROM students WHERE id = ?");
        $stmt->bind_param("i", $id);

        if($stmt->execute()){
            if($stmt->affected_rows > 0){
                echo "<p>Record deleted successfully!</p>";
            } else {
                echo "<p>No record found with ID $id.</p>";
            }
        } else {
            echo "<p>Error deleting record: " . $conn->error . "</p>";
        }

        $stmt->close();
    }
    ?>
</section>
