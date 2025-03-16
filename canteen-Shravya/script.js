
// Mobile sidebar toggle
const mobileToggle = document.getElementById('mobileToggle');
const sidebar = document.getElementById('sidebar');
const mainContent = document.getElementById('mainContent');

mobileToggle.addEventListener('click', () => {
    sidebar.classList.toggle('active');
});

// Select all checkbox functionality
const selectAll = document.getElementById('selectAll');
const itemCheckboxes = document.querySelectorAll('.item-checkbox');

selectAll.addEventListener('change', () => {
    itemCheckboxes.forEach(checkbox => {
        checkbox.checked = selectAll.checked;
    });
});

// Sortable table headers
const tableHeaders = document.querySelectorAll('.data-table th');

tableHeaders.forEach(header => {
    if (!header.classList.contains('checkbox-cell')) {
        header.addEventListener('click', () => {
            // Remove sorted classes from all headers
            tableHeaders.forEach(h => {
                h.classList.remove('sorted-asc', 'sorted-desc');
            });
            
            // Add sorted class to clicked header
            if (header.classList.contains('sorted-asc')) {
                header.classList.remove('sorted-asc');
                header.classList.add('sorted-desc');
            } else {
                header.classList.remove('sorted-desc');
                header.classList.add('sorted-asc');
            }
            
            // Sorting logic would go here in a real application
        });
    }
});

// Submenu toggle functionality
const menuItems = document.querySelectorAll('.menu-item');

menuItems.forEach(item => {
    item.addEventListener('click', () => {
        const submenu = item.nextElementSibling;
        if (submenu && submenu.classList.contains('submenu')) {
            submenu.classList.toggle('active');
        }
        
        // Toggle active class on menu items
        menuItems.forEach(mi => {
            if (mi !== item) {
                mi.classList.remove('active');
                const nextSubmenu = mi.nextElementSibling;
                if (nextSubmenu && nextSubmenu.classList.contains('submenu')) {
                    nextSubmenu.classList.remove('active');
                }
            }
        });
        
        item.classList.toggle('active');
    });
});
