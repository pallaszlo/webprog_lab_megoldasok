$(document).ready(function () {
    fetchData();

    $("#addStudent").click(function () {
        addStudent();
    });

    $("#updateStudent").click(function () {
        updateStudent();
    });

    $("#cancelEdit").click(function () {
        showAddForm();
    });
});

function fetchData() {
    $.ajax({
        url: "api.php",
        type: "GET",
        dataType: "json",
        success: function (data) {
            displayData(data);
        },
        error: function (error) {
            console.error("Error fetching data:", error);
        }
    });
}

function displayData(data) {
    const outputDiv = $("#output");
    outputDiv.html("");

    const table = $("<table>").append(`
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
    `);

    $.each(data, function (index, student) {
        const row = $("<tr>").append(`
            <td>${student.id}</td>
            <td>${student.name}</td>
            <td>${student.age}</td>
            <td>
                <button onclick="editStudent(${student.id},'${student.name}',${student.age})">Edit</button>
                <button onclick="deleteStudent(${student.id})">Delete</button>
            </td>
        `);
        table.append(row);
    });

    outputDiv.append(table);
}

function addStudent() {
    const name = $("#name").val();
    const age = $("#age").val();

    $.ajax({
        url: "api.php",
        type: "POST",
        contentType: "application/json",
        data: JSON.stringify({ name, age }),
        success: function (data) {
            fetchData();
            $("#name").val("");
            $("#age").val("");
        },
        error: function (error) {
            console.error("Error adding student:", error);
        }
    });
}

function editStudent(id, name, age) {
    $("#editId").val(id);
    $("#editName").val(name);
    $("#editAge").val(age);
    showEditForm();
}

function updateStudent() {
    const id = $("#editId").val();
    const name = $("#editName").val();
    const age = $("#editAge").val();

    $.ajax({
        url: "api.php?id=" + id,
        type: "PUT",
        contentType: "application/json",
        data: JSON.stringify({ name, age }),
        success: function (data) {
            fetchData();
            showAddForm();
        },
        error: function (error) {
            console.error("Error updating student:", error);
        }
    });
}

function deleteStudent(id) {
    $.ajax({
        url: `api.php?id=${id}`,
        type: "DELETE",
        success: function (data) {
            fetchData();
        },
        error: function (error) {
            console.error("Error deleting student:", error);
        }
    });
}

function showEditForm() {
    $("#studentForm").hide();
    $("#editForm").show();
}

function showAddForm() {
    $("#editForm").hide();
    $("#studentForm").show();
}
