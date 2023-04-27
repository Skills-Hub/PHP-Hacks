<?php
// CSVReader class to read CSV files and convert to HTML table
class CSVReader {
    private $filePath;

    public function __construct($filePath) {
        $this->filePath = $filePath;
    }

    // method to convert CSV to HTML table
    public function convertToHTMLTable() {
        $csvFile = fopen($this->filePath, 'r');

        if ($csvFile !== false) {
            // Start the HTML table
            echo '<table border="1" cellpadding="10">';

            while (($csvRow = fgetcsv($csvFile, 100, ',')) !== false) {
                // Start a new row
                echo '<tr>';

                for ($i = 0; $i < count($csvRow); $i++) {
                    // Output each cell
                    echo '<td>' . $csvRow[$i] . '</td>';
                }

                // Close the row
                echo '</tr>';
            }

            // Close the table
            echo '</table>';

            fclose($csvFile);
        }
    }
}

// Usage:
$csvReader = new CSVReader('data/invitations.csv');
$csvReader->convertToHTMLTable();
