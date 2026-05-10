<?php
$num = $num2 = $base2 = $base10 = $base16 = $base8 = "";
$andRes = $orRes = $xorRes = $shlRes = $shrRes = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['clear'])) {
        $num = $num2 = "";
    } else {
        // Compatibilidad con PHP antiguo y moderno
        $num = isset($_POST['num']) ? $_POST['num'] : "";
        $num2 = isset($_POST['num2']) ? $_POST['num2'] : "";

        if (is_numeric($num)) {
            $base10 = $num;
            $base2  = decbin($num);
            $base16 = strtoupper(dechex($num));
            $base8  = decoct($num);
        }

        if (is_numeric($num) && is_numeric($num2)) {
            $andRes = $num & $num2;
            $orRes  = $num | $num2;
            $xorRes = $num ^ $num2;
            $shlRes = $num << $num2;
            $shrRes = $num >> $num2;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Programador PHP</title>
    <style>
        :root {
            --bg-color: #202020;
            --card-bg: #2d2d2d;
            --text-color: #ffffff;
            --accent: #0078d4;
            --border: #3d3d3d;
        }
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background: var(--bg-color); 
            color: var(--text-color); 
            margin: 0;
            display: flex; 
            justify-content: center; 
            align-items: center;
            min-height: 100vh;
        }
        .container { 
            width: 90%; 
            max-width: 450px; 
            background: var(--card-bg); 
            padding: 30px; 
            border-radius: 12px; 
            box-shadow: 0 15px 35px rgba(0,0,0,0.6); 
        }
        h2 { 
            margin-top: 0; 
            font-weight: 300; 
            border-bottom: 1px solid var(--border); 
            padding-bottom: 15px;
            font-size: 24px;
        }
        
        .input-group { margin-bottom: 20px; }
        label { display: block; font-size: 11px; color: #aaa; margin-bottom: 8px; font-weight: bold; letter-spacing: 0.5px; }
        input[type="number"] { 
            width: 100%; 
            background: #1f1f1f; 
            border: 1px solid var(--border); 
            color: white; 
            padding: 12px; 
            box-sizing: border-box; 
            font-size: 20px;
            border-radius: 4px;
            outline: none;
        }
        
        .actions { display: flex; gap: 10px; margin-bottom: 30px; }
        button { 
            flex: 1; 
            padding: 12px; 
            border: none; 
            cursor: pointer; 
            font-weight: bold; 
            border-radius: 4px;
            font-size: 14px;
            transition: all 0.2s; 
        }
        .calc-btn { background: var(--accent); color: white; }
        .clear-btn { background: #3d3d3d; color: white; }

        .base-display { background: #252525; padding: 15px; border-radius: 8px; margin-bottom: 25px; border-left: 5px solid var(--accent); }
        .base-item { display: flex; justify-content: space-between; padding: 6px 0; border-bottom: 1px solid #363636; }
        .base-name { color: #888; font-size: 12px; font-weight: bold; }
        .base-val { font-family: 'Consolas', monospace; font-size: 15px; color: #00a2ff; }

        .result-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
        .result-card { background: #353535; padding: 12px; border-radius: 6px; }
        .res-label { display: block; color: var(--accent); font-size: 10px; margin-bottom: 5px; font-weight: bold; text-transform: uppercase; }
        .res-val { font-family: monospace; font-size: 14px; }
    </style>
</head>
<body>

<div class="container">
    <h2>Programador</h2>

    <form method="POST">
        <div class="input-group">
            <label>NÚMERO 1 (DECIMAL)</label>
            <input type="number" name="num" value="<?php echo htmlspecialchars($num); ?>" required placeholder="0" autofocus>
        </div>
        <div class="input-group">
            <label>NÚMERO 2 / DESPLAZAMIENTO</label>
            <input type="number" name="num2" value="<?php echo htmlspecialchars($num2); ?>" placeholder="0">
        </div>

        <div class="actions">
            <button type="submit" class="calc-btn">CALCULAR</button>
            <button type="submit" name="clear" class="clear-btn">BORRAR</button>
        </div>
    </form>

    <?php if ($num !== "" && $base10 !== ""): ?>
        <div class="base-display">
            <div class="base-item"><span class="base-name">HEX</span><span class="base-val"><?php echo $base16; ?></span></div>
            <div class="base-item"><span class="base-name">DEC</span><span class="base-val"><?php echo $base10; ?></span></div>
            <div class="base-item"><span class="base-name">OCT</span><span class="base-val"><?php echo $base8; ?></span></div>
            <div class="base-item"><span class="base-name">BIN</span><span class="base-val"><?php echo chunk_split($base2, 4, ' '); ?></span></div>
        </div>
    <?php endif; ?>

    <?php if ($andRes !== ""): ?>
        <div class="result-grid">
            <div class="result-card">
                <span class="res-label">AND (&)</span>
                <span class="res-val"><?php echo $andRes; ?></span>
            </div>
            <div class="result-card">
                <span class="res-label">OR (|)</span>
                <span class="res-val"><?php echo $orRes; ?></span>
            </div>
            <div class="result-card">
                <span class="res-label">XOR (^)</span>
                <span class="res-val"><?php echo $xorRes; ?></span>
            </div>
            <div class="result-card">
                <span class="res-label">LSH (<<)</span>
                <span class="res-val"><?php echo $shlRes; ?></span>
            </div>
        </div>
    <?php endif; ?>
</div>

</body>
</html>