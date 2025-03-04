<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <script src="{{ asset('js/jspdf.umd.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
<style>
        .btn {
  -webkit-border-radius: 60;
  -moz-border-radius: 60;
  border-radius: 60px;
  border:none;
  font-family: "Roboto", sans-serif;
  color: #ffffff;
  font-size: 15px;
  background: #c3d934;
  padding: 15px 50px 15px 50px;
  text-decoration: none;
}

.btn:hover {
  background: #99ad18;
  text-decoration: none;
  color: white;
}
    </style>
</head>
<body>
    <div style="width: 100%">
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="/">Home</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Downloading...</h5>
    <p class="card-text">Your Certificate will download automatically and ready for printing. If it doesn't, please click the botton below.</p>
    <button id="download-btn" class="btn">Download</button>
  </div>
</div>
</div>
<script src="https://unpkg.com/pdf-lib@1.4.0"></script>
    <script src="{{ asset('js/FileSaver.js') }}"></script>
    <script src="https://unpkg.com/@pdf-lib/fontkit@0.0.4"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
   

<button style="display:none" id="print-btn" class="btn">Print</button>
<script>
    window.onload = function() {
    // Simulate a click on the print button
    downloadBtn.click();
};

    //const name = prompt('Choose a name for your certificate? ')
	const downloadBtn = document.getElementById('download-btn');
    const printBtn = document.getElementById('print-btn');
   

//var downloadBtn = document.getElementById('download-btn')
const { PDFDocument, rgb, degrees } = PDFLib;
  // Access user data passed from Laravel controller
  const firstName = '{{ Auth::user()->firstname }}';
    const lastName = '{{ Auth::user()->lastname }}';
    const fullName = firstName + ' ' + lastName;
	const today = new Date(); 
const formattedDate = today.toLocaleDateString(); 
const date = formattedDate;

const generatePDF = async (fullName) => {
  const existingPdfBytes = await fetch("/img/certForCareOfSkin.pdf").then((res) =>
    res.arrayBuffer()
  );

  // Load a PDFDocument from the existing PDF bytes
  const pdfDoc = await PDFDocument.load(existingPdfBytes);
  pdfDoc.registerFontkit(fontkit);

  //get font
  const fontBytes = await fetch("{{ asset('fonts/Satisfy-Regular.ttf') }}").then((res) =>
     res.arrayBuffer()
   );

   

  // Embed our custom font in the document
  const SanChezFont = await pdfDoc.embedFont(fontBytes);

  // Get the first page of the document
  const pages = pdfDoc.getPages();
  const firstPage = pages[0];

  // Draw a string of text diagonally across the first page
  firstPage.drawText(fullName, {
    x: 250,
    y: 320,
    size: 58,
    font: SanChezFont,
    color: rgb(0.517, 0.58, 0.07),
  });

  firstPage.drawText(date, {
    x: 450,
    y: 38,
    size: 20,
    font: SanChezFont,
    color: rgb(0.517, 0.58, 0.07),
  });

  // Serialize the PDFDocument to bytes (a Uint8Array)
  const pdfBytes = await pdfDoc.save();
  console.log("Done creating");

  // this was for creating uri and showing in iframe

  // const pdfDataUri = await pdfDoc.saveAsBase64({ dataUri: true });
  // document.getElementById("pdf").src = pdfDataUri;

  var file = new File(
    [pdfBytes],
    "CareOfSkinCertificate.pdf",
    {
      type: "application/pdf;charset=utf-8",
    }
  );
 saveAs(file);
 const base64PDF = arrayBufferToBase64(pdfBytes); //1
 sendPDFToServer(base64PDF, fullName); //2
};

function arrayBufferToBase64(buffer) {
  let binary = '';
  const bytes = new Uint8Array(buffer);
  const len = bytes.byteLength;
  for (let i = 0; i < len; i++) {
    binary += String.fromCharCode(bytes[i]);
  }
  return window.btoa(binary);
}


function sendPDFToServer(pdfBase64, fullName) {
  fetch("/saveCareOfskinCertificate", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
     "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    },
    body: JSON.stringify({ pdfBase64, fullName })
  })
  .then(response => response.json())
  .then(data => console.log("Server Response:", data))
  .catch(error => console.error("Error:", error));
}
// downloadBtn.addEventListener('click', function() {
//         const link = document.createElement('a');
//         link.href = canvas.toDataURL('image/jpeg');
//         link.download = 'certificate.jpeg';
//         link.click();
//     });

    // Print function
    downloadBtn.addEventListener('click', function() {
        generatePDF(fullName);
        });

// name.addEventListener('input', function () {
// 	drawImage()	
// })


</script>
</body>
</html>