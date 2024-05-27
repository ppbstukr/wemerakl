<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Firebse 연동 테스트</title>
</head>

<body>

    <div id="numm" style="font-size: 25px; font-weight: 600;"></div>
    <!-- 여기에 Firebase 연동 스크립트를 삽입합니다 -->
    <!-- 파이어베이스 -->
    <script type="module">
    import {
        initializeApp
    } from "https://www.gstatic.com/firebasejs/10.5.2/firebase-app.js";
    import {
        getFirestore,
        doc,
        setDoc,
        addDoc,
        collection,
        getDocs,
        query,
        where,
    } from "https://www.gstatic.com/firebasejs/10.5.2/firebase-firestore.js";

    const firebaseConfig = {
        projectId: "wemrakl",
    };

    const app = initializeApp(firebaseConfig);

    var db = getFirestore(app);

    const collectionRef = collection(db, "bmTicket");
    var name = <?php echo $_POST['name']; ?>
    var email = <?php echo $_POST['email']; ?>
    var phone = <?php echo $_POST['phone']; ?>
    var authCode = <?php echo $_POST['authCode']; ?>

    addNewUser(name, email, phone, authCode)
        .then((res) => {
            console.log(res);
        })
        .catch((e) => {
            console.log(e);
        });

    // ============= firebase 생성(bmds쿠폰번호) 시작 =============
    function addNewUser(name, email, phone, authCode) {
        return new Promise(async (resolve, reject) => {
            try {
                const docRef = await addDoc(collectionRef, {
                    name: name,
                    email: email,
                    phone: phone,
                    authCode: authCode,
                    useYN: "N",
                    delYn: "N",
                    createDate: new Date(),
                });
                resolve(docRef.id);
            } catch (e) {
                reject(e);
            }
        });
    }
    // ============= firebase 생성(bmds쿠폰번호) 끝 =============
    </script>
</body>

</html>