<html>

<head>
    <title> Tampil Data Matakuliah</title>
</head>

<body>
    <center>
            <table>
                <tr>
                    <th colspan="3">
                        Tampil Data Mata Kuliah
                    </th>
                </tr>
                <tr>
                    <td clospan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td>
                        <?= $name; ?>
                    </td>
                </tr>
                <tr>
                    <th>SKS</th>
                    <td>:</td>
                    <td>
                        <?= $sks; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                    <a href="<? = base_url('matakuliah'); ?>">Kembali</a>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>