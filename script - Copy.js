document.addEventListener('DOMContentLoaded', () => {
  fetch('http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=school&table=grades')
    .then(response => response.json())
    .then(data => {
      const tableBody = document.querySelector('#data-table tbody');
      data.forEach(row => {
        const tr = document.createElement('tr');
        tr.innerHTML = `
          <td>${row.id}</td>
          <td>${row.name}</td>
          <td>${row.value}</td>
        `;
        tableBody.appendChild(tr);
      });
    })
    .catch(error => console.error('Error fetching data:', error));
});
