$(document).ready(function () {
    console.log('log-form loaded')

    $('#entry0-add').click(function () {
        const itemCount = $('#entry0-count').val();

        $('#entry0-tbody').append(
            '<tr id="entry0-item' + itemCount + '">\n' +
            '  <td>\n' +
            '      <select name="entry[0][' + itemCount + '][project_code]"\n' +
            '              class="form-control form-control-sm" required>\n' +
            '          <option value="">- Select Project Code</option>\n' +
            '          <option value="KLICK">Klick</option>\n' +
            '          <option value="LEARN">Learning (tutorials, playground, etc)</option>\n' +
            '          <option value="PROJ">Personal Projects</option>\n' +
            '          <option value="POC">Prototype or Proof-of-concept</option>\n' +
            '          <option value="SSO">Singapore Symphony Orchestra</option>\n' +
            '      </select>\n' +
            '  </td>\n' +
            '  <td>\n' +
            '      <input type="text" name="entry[0][' + itemCount + '][title_item]"\n' +
            '              class="form-control form-control-sm" required>\n' +
            '\n' +
            '  </td>\n' +
            '  <td>\n' +
            '      <button id="entry0-item' + itemCount + '-remove" type="button"\n' +
            '              class="btn btn-sm btn-link text-danger">\n' +
            '          <i class="fas fa-fw fa-trash-alt"></i>\n' +
            '      </button>\n' +
            '  </td>\n' +
            '</tr>'
        );
    })
})
