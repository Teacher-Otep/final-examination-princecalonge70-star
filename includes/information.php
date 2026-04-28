<section id="information" class="content">
    <h2>Student Information</h2>
    <?php
    $result = $conn->query("SELECT * FROM students");
    if(!$result){
        echo "<p>Error: " . $conn->error . "</p>";
    } elseif ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            echo "<div class='info-card'>
                    <h3>{$row['surname']}, {$row['name']} {$row['middlename']}</h3>
                    <p><strong>ID:</strong> {$row['id']}</p>
                    <p><strong>Address:</strong> {$row['address']}</p>
                    <p><strong>Contact:</strong> {$row['contact_number']}</p>
                  </div>";
        }
        echo "<p>Total Students: " . $result->num_rows . "</p>";
    } else {
        echo "<p>No student records found.</p>";
    }
    ?>
</section>
