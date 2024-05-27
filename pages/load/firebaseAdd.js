<!-- Firebase SDK를 HTML 파일에 포함 -->
<script src="https://www.gstatic.com/firebasejs/10.5.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/10.5.2/firebase-firestore.js"></script>

<!-- JavaScript 코드 -->
    var firebaseConfig = { projectId: "wemrakl" };
    var app = initializeApp(firebaseConfig);
    var db = getFirestore(app);
    var collectionRef = collection(db, "bmTicket");

    function addNewUser(name, email, phone, authCode) {
        try {
            var docRef = addDoc(collectionRef, {
                name: name,
                email: email,
                phone: phone,
                authCode: authCode,
                useYN: "N",
                delYn: "N",
                createDate: new Date()
            });
            return docRef;
        } catch (e) {
            console.log(e);
        }
    }

    // PHP로부터 전달된 데이터 사용
    var name = "<?php echo $name; ?>";
    var email = "<?php echo $email; ?>";
    var phone = "<?php echo $phone; ?>";
    var authCode = "<?php echo $authCode; ?>";

    var result = addNewUser(name, email, phone, authCode);
    console.log(result);
