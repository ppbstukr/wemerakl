<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$authCode = $_POST['authCode'];

echo '<script>
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
    projectId: "wemrakl"
};
const app = initializeApp(firebaseConfig);
var db = getFirestore(app);
const collectionRef = collection(db, "bmTicket");

var name = "' . $name . '";
var email = "' . $email . '";
var phone = "' . $phone . '";
var authCode = "' . $authCode . '";

addNewUser(name, email, phone, authCode);

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
</script>';
?>