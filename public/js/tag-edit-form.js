$(document).ready(function() {
    console.log('tag-edit-form loaded')

    // Company
    $('#add-company').click(function() {
        console.log('#add-company clicked')

        const count = $('#count-company').val()

        $('#tbody-company').append(
            '<tr>\n' +
            '    <td><sup class="text-success">NEW</sup></td>\n' +
            '    <td>\n' +
            '        <div class="form-row">\n' +
            '            <div class="col">\n' +
            '                <input type="text" name="company[' + count + '][title]"\n' +
            '                        class="form-control form-control-sm">\n' +
            '            </div>\n' +
            '            <div class="col-3">\n' +
            '                <input type="text" name="company[' + count + '][code]"\n' +
            '                        class="form-control form-control-sm">\n' +
            '            </div>\n' +
            '        </div>\n' +
            '    </td>\n' +
            '    <td>\n' +
            '        <div class="input-group input-group-sm">\n' +
            '            <input type="date" name="company[' + count + '][period_started_on]"\n' +
            '                    class="form-control">\n' +
            '            <div class="input-group-prepend input-group-append">\n' +
            '                <div class="input-group-text">-</div>\n' +
            '            </div>\n' +
            '            <input type="date" name="company[' + count + '][period_ended_on]"\n' +
            '                    class="form-control">\n' +
            '        </div>\n' +
            '    </td>\n' +
            '    <td>\n' +
            '        <div class="form-check">\n' +
            '            <input class="form-check-input position-static" type="checkbox"\n' +
            '                    name="company[' + count + '][remove]" value="remove">\n' +
            '        </div>\n' +
            '    </td>\n' +
            '</tr>'
        )
    })

    // Project
    $('#add-project').click(function() {
        console.log('"#add-project clicked')

        const count = $('#count-project').val()

        $('#tbody-project').append(
            '<tr>\n' +
            '    <td><sup class="text-success">NEW</sup></td>\n' +
            '    <td>\n' +
            '       <input type="text" name="project[' + count + '][title]"\n' +
            '           class="form-control form-control-sm">\n' +
            '    </td>\n' +
            '    <td>\n' +
            '        <input type="text" name="project[' + count + '][title]"\n' +
            '           class="form-control form-control-sm">\n' +
            '    </td>\n' +
            '    <td>\n' +
            '        <div class="form-check">' +
            '            <input class="form-check-input position-static" type="checkbox"' +
            '                name="project[' + count + '][remove]" value="remove"' +
            '        </div>' +
            '    </td>\n' +
            '</tr>'
        )
    })

    // Year
    $('#add-year').click(function() {
        console.log('"#add-year" clicked')

        const count = $('#count-year').val()

        $('#tbody-year').append(
            '<tr>\n' +
            '    <td><sup class="text-success">NEW</sup></td>\n' +
            '    <td>\n' +
            '        <input type="text" name="year['+count+'][title]"\n' +
            '                class="form-control form-control-sm">\n' +
            '    </td>\n' +
            '    <td>\n' +
            '        <div class="form-check">\n' +
            '            <input class="form-check-input position-static" type="checkbox"\n' +
            '                    name="year['+count+'][remove]" value="remove">\n' +
            '        </div>\n' +
            '    </td>\n' +
            '</tr>'
        )
    })

    // Day Type
    $('#add-daytype').click(function() {
        console.log('#add-daytype clicked')

        const count = $('#count-daytype').val()

        $('#tbody-daytype').append(
            '<tr>\n' +
            '    <td><sup type="text-success">NEW</sup></td>\n' +
            '    <td>\n' +
            '        <input type="text" name="daytype[' + count + '][title]"\n' +
            '                class="form-control form-control-sm">\n' +
            '    </td>\n' +
            '    <td>\n' +
            '        <input type="text" name="daytype[' + count + '][code]"\n' +
            '                class="form-control form-control-sm">\n' +
            '    </td>\n' +
            '    <td>\n' +
            '        <div class="input-group input-group-sm mb-3">\n' +
            '            <input type="text" name="daytype[' + count + '][icon_fa]" class="form-control"\n' +
            '                value="fas fa-fw fa-question">\n' +
            '            <div class="input-group-append">\n' +
            '              <span class="input-group-text" id="basic-addon2">\n' +
            '                <i class="fas fa-fw fa-question"></i>\n' +
            '              </span>\n' +
            '            </div>\n' +
            '        </div>\n' +
            '    </td>\n' +
            '    <td>\n' +
            '        <input type="color" name="daytype[' + count + '][color_hex]"\n' +
            '                class="form-control form-control-sm">\n' +
            '    </td>\n' +
            '    <td>\n' +
            '        <div class="form-check">\n' +
            '            <input class="form-check-input position-static" type="checkbox"\n' +
            '                name="daytype[' + count + '][remove]" value="remove">\n' +
            '        </div>\n' +
            '    </td>\n' +
            '</tr>'
        )
    })
})
