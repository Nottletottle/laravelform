document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('addRow').addEventListener('click', function() {
        const table = document.getElementById('childrenTable');
        const row = table.insertRow(-1);
        const html = `
            <tr>
                <td><button class="btn btn-danger btn-sm deleteRow">Delete</button></td>
                <td><input type="text" name="children[new][first_name]"></td>
                <td><input type="text" name="children[new][middle_name]"></td>
                <td><input type="text" name="children[new][last_name]"></td>
                <td><input type="text" name="children[new][age]"></td>
                <td>
                    <select name="children[new][gender]"
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
                <td>
                    <input type="checkbox" name="children[new][different_address]" class="differentAddressCheckbox" onchange="toggleAddressFields(this)">
                </td>
                <td><input type="text" name="children[new][address]" class="address-field" disabled></td>
                <td><input type="text" name="children[new][city]" class="address-field" disabled></td>
                <td><input type="text" name="children[new][state]" class="address-field" disabled></td>
                <td>
                    <select name="children[new][country]" class="address-field" disabled>
                        <option value="USA">USA</option>
                        <option value="Canada">Canada</option>
                        <option value="UK">UK</option>
                    </select>
                </td>
                <td><input type="text" name="children[new][zip]" class="address-field" disabled></td>
            </tr>
        `;
        row.innerHTML = html;
        });
        
            document.getElementById('childrenTable').addEventListener('click', function(e) {
                if (e.target && e.target.classList.contains('deleteRow')) {
                    const row = e.target.parentNode.parentNode;
                    try {
                        row.parentNode.removeChild(row);
                        const childId = row.querySelector('form').getAttribute('action').replace('/', '');
                        deleteChild(childId);
                    } catch (error) {
                        row.parentNode.removeChild(row);
                    }
                }
            });
});


function deleteChild(childId) {
        fetch(`/${childId}`, {
            method: 'DELETE',
        })
        .then(response => {
            if (response.ok) {
                console.log('Child deleted successfully!');
            } else {
                console.error('Failed to delete child.');
            }
        })
        .catch(error => {
            console.error(error);
        });
    }
// Add code to handle the "Different Address?" checkbox and validation messages.
function toggleAddressFields(checkbox) {
    const row = checkbox.parentNode.parentNode;
    const addressInputs = row.querySelectorAll('input[name^="children["][name$="][address]"], input[name^="children["][name$="][city]"], input[name^="children["][name$="][state]"], select[name^="children["][name$="][country]"], input[name^="children["][name$="][zip]"]');

    if (checkbox.checked) {
        addressInputs.forEach((input) => {
            input.disabled = false;
        });
    } else {
        addressInputs.forEach((input) => {
            input.disabled = true;
        });
    }
}