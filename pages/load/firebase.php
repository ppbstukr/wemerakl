<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<body>
    <!-- JavaScript 코드 -->
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


    addNewUser("김ㅇㅇ", "4571@타앙", "01045682845", "ㅇㄹ5ㅇ5ㄹ4");

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

    // ============= firebase 전체조회(bmds쿠폰번호) 시작 =============
    async function getTickets() {
        return new Promise(async (resolve, reject) => {
            try {
                const querySnapshot = await getDocs(collectionRef);
                const tickets = [];
                querySnapshot.forEach((doc) => {
                    tickets.push({
                        id: doc.id,
                        data: doc.data(),
                    });
                });
                resolve(tickets);
            } catch (error) {
                reject(error);
            }
        });
    }
    // ============= firebase 전체조회(bmds쿠폰번호) 끝 =============

    // ============= firebase 조건하나조회(bmds쿠폰번호) 시작 =============
    function getTicketsByCondition(phone) {
        return new Promise(async (resolve, reject) => {
            try {
                const querySnapshot = await getDocs(
                    query(collectionRef, where("phone", "==", phone))
                );
                const result = [];
                querySnapshot.forEach((doc) => {
                    result.push({
                        id: doc.id,
                        data: doc.data(),
                    });
                });
                resolve(result);
            } catch (error) {
                reject(error);
            }
        });
    }
    // ============= firebase 조건하나조회(bmds쿠폰번호) 끝 =============

    // ============= firebase 여러조건조회(bmds쿠폰번호) 시작 =============
    function getTicketsByMultipleConditions(phone, useYn, delYn) {
        return new Promise(async (resolve, reject) => {
            try {
                const querySnapshot = await getDocs(
                    query(
                        collectionRef,
                        where("phone", "==", phone),
                        where("useYn", "==", useYn),
                        where("delYn", "==", delYn)
                    )
                );
                const result = [];
                querySnapshot.forEach((doc) => {
                    result.push({
                        id: doc.id,
                        data: doc.data(),
                    });
                });
                resolve(result);
            } catch (error) {
                reject(error);
            }
        });
    }

    // ============= firebase 여러조건조회(bmds쿠폰번호) 끝 =============

    // ============= firebase 사용여부수정(bmds쿠폰번호) 시작 =============
    function updateTicketUseYn(docId, newData) {
        return new Promise(async (resolve, reject) => {
            try {
                const docRef = doc(collectionRef, docId);
                await updateDoc(docRef, newData);
                resolve("Document updated successfully");
            } catch (error) {
                reject(error);
            }
        });
    }
    // ============= firebase 사용여부수정(bmds쿠폰번호) 끝 =============

    // ============= firebase 정보삭제(bmds쿠폰번호) 시작 =============
    function deleteDocument(docId) {
        return new Promise(async (resolve, reject) => {
            try {
                const docRef = doc(collectionRef, docId);
                await deleteDoc(docRef);
                resolve("Document deleted successfully");
            } catch (error) {
                reject(error);
            }
        });
    }
    // ============= firebase 정보삭제(bmds쿠폰번호) 끝 =============
    </script>
</body>

</html>