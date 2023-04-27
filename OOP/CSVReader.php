<?php
/**
 * CSVReader class to read CSV files and convert to HTML table
 */
class CSVReader {
    /**
     * @var string The file path of the CSV file to read
     */
    private $filePath;

    /**
     * Constructs a new CSVReader object with the specified file path
     *
     * @param string $filePath The file path of the CSV file to read
     */
    public function __construct($filePath) {
        $this->filePath = $filePath;
    }

    /**
     * Converts the CSV file to an HTML table and outputs it to the browser
     */
    public function convertToHTMLTable() {
        // Open the CSV file for reading
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

            // Close the CSV file
            fclose($csvFile);
        }
    }
}

// Usage:
$csvReader = new CSVReader('data/invitations.csv');
$csvReader->convertToHTMLTable();
