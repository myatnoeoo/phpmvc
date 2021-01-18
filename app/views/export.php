<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/css/import-export.css">
</head>
<body>
    <div class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <p>Export Screen</p>
                <span class="modal-close">&times;</span>
            </div>
            <div class="modal-body">
                <p>Please input the output place of an export file.</p><br>
                <div>
                    <input type="text" id="file-chosen">
                    <input type="file" id="actual-btn" class="modal-file" hidden/>
                    <label for="actual-btn" class="modal-file-selcet ref-label">Reference</label>
                </div>
            </div>
            <div class="modal-footer">
                <div>
                    <button class="modal-ok">OK</button>
                    <button class="modal-close">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="error-box">
        <div class="error-content">
            <div class="error-header">
                <p>Error</p>
                <span class="error-ok">&times;</span>
            </div>
            <div class="error-body">
                <p>Please Input the file name.</p>
            </div>
            <div class="error-footer">
                <div>
                    <button class="error-ok">OK</button>
                </div>
            </div>
        </div>
    </div>
    <button class="open_modal">Export All(E)</button>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./public/js/import-export-version.js"></script>
</html>