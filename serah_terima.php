<?php
/**
 * SERAH TERIMA CS - PROFESSIONAL ZIA EDITION
 * Fitur: Custom Scrollbar, Auto-Save Local, Copy No-Block, Top-Center Toast
 */
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>SERAH TERIMA CS | ZIA</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;800;900&family=Rajdhani:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
                :root {
            --gold: #ff8a00;
            --gold-soft: #ff7a00;
            --gold-light: #ffd2a3;
            --red: #ff4b2b;
            --red-soft: rgba(255, 75, 43, 0.35);
            --cyan: #38bdf8;
            --cyan-soft: rgba(56, 189, 248, 0.30);
            --bg: #020817;
            --bg-2: #071120;
            --card: rgba(8, 25, 48, 0.92);
            --card-2: rgba(255, 255, 255, 0.045);
            --line: rgba(255, 138, 0, 0.34);
            --line-soft: rgba(255, 255, 255, 0.10);
            --text: #f3fbff;
            --muted: rgba(243, 251, 255, 0.66);
            --shadow: rgba(0, 0, 0, 0.72);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;
            color: var(--text);
            font-family: 'Rajdhani', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 28px 18px;
            overflow-x: hidden;
            background:
                radial-gradient(circle at 12% 10%, rgba(255, 170, 0, 0.20), transparent 28%),
                radial-gradient(circle at 90% 80%, rgba(212, 175, 55, 0.14), transparent 30%),
                linear-gradient(135deg, #070707 0%, #171307 45%, #090909 100%);
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            inset: 0;
            pointer-events: none;
            background-image:
                linear-gradient(rgba(255,255,255,0.035) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.035) 1px, transparent 1px);
            background-size: 44px 44px;
            mask-image: radial-gradient(circle at center, rgba(0,0,0,0.9), transparent 72%);
        }

        body::after {
            content: '';
            position: fixed;
            inset: 0;
            pointer-events: none;
            background:
                linear-gradient(120deg, transparent 0%, rgba(255,170,0,0.055) 48%, transparent 58%);
            opacity: 0.75;
        }

        #zia-handover-root {
            width: 100%;
            max-width: 980px;
            position: relative;
            z-index: 2;
        }

        .zia-header {
            text-align: center;
            margin-bottom: 26px;
            padding: 0 10px;
        }

        .zia-header h1 {
            font-family: 'Orbitron', sans-serif;
            font-size: clamp(28px, 5vw, 48px);
            line-height: 1.18;
            letter-spacing: clamp(5px, 1.2vw, 13px);
            text-transform: uppercase;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 0;
            filter: drop-shadow(0 0 22px rgba(255, 170, 0, 0.22));
        }

        .zia-header h1 span {
            display: inline-block;
            color: var(--gold-light);
            animation: neonTitle 3.8s ease-in-out infinite;
            text-shadow:
                0 0 8px rgba(255, 170, 0, 0.60),
                0 0 24px rgba(212, 175, 55, 0.38);
        }

        @keyframes neonTitle {
            0%, 16%, 20%, 24%, 100% {
                color: var(--gold-light);
                text-shadow:
                    0 0 8px rgba(255, 170, 0, 0.60),
                    0 0 24px rgba(212, 175, 55, 0.38);
                opacity: 1;
            }
            18%, 22% {
                color: rgba(255,255,255,0.32);
                text-shadow: none;
                opacity: 0.62;
            }
        }

        .zia-header h1 span:nth-child(1) { animation-delay: 0.05s; }
        .zia-header h1 span:nth-child(2) { animation-delay: 0.10s; }
        .zia-header h1 span:nth-child(3) { animation-delay: 0.15s; }
        .zia-header h1 span:nth-child(4) { animation-delay: 0.20s; }
        .zia-header h1 span:nth-child(5) { animation-delay: 0.25s; }
        .zia-header h1 span:nth-child(6) { animation-delay: 0.30s; }
        .zia-header h1 span:nth-child(7) { animation-delay: 0.35s; }
        .zia-header h1 span:nth-child(8) { animation-delay: 0.40s; }
        .zia-header h1 span:nth-child(9) { animation-delay: 0.45s; }
        .zia-header h1 span:nth-child(10) { animation-delay: 0.50s; }
        .zia-header h1 span:nth-child(11) { animation-delay: 0.55s; }
        .zia-header h1 span:nth-child(12) { animation-delay: 0.60s; }
        .zia-header h1 span:nth-child(13) { animation-delay: 0.65s; }
        .zia-header h1 span:nth-child(14) { animation-delay: 0.70s; }
        .zia-header h1 span:nth-child(15) { animation-delay: 0.75s; }

        .zia-card {
            position: relative;
            overflow: hidden;
            border-radius: 30px;
            padding: 32px;
            background:
                linear-gradient(180deg, rgba(255,255,255,0.055), transparent 34%),
                linear-gradient(135deg, rgba(18,18,20,0.96), rgba(7,7,8,0.96));
            border: 1px solid rgba(212, 175, 55, 0.32);
            box-shadow:
                0 36px 88px var(--shadow),
                0 0 0 1px rgba(255,255,255,0.035),
                0 0 48px rgba(255,170,0,0.11),
                inset 0 1px 0 rgba(255,255,255,0.09);
            backdrop-filter: blur(16px);
        }

        .zia-card::before {
            content: '';
            position: absolute;
            width: 680px;
            height: 680px;
            right: -290px;
            top: -330px;
            background: conic-gradient(from 160deg, transparent, rgba(255,170,0,0.55), transparent 42%);
            opacity: 0.38;
            animation: rotateAura 10s linear infinite;
            pointer-events: none;
        }

        .zia-card::after {
            content: '';
            position: absolute;
            inset: 1px;
            border-radius: 29px;
            background: radial-gradient(circle at 10% 0%, rgba(255,170,0,0.10), transparent 32%);
            pointer-events: none;
        }

        @keyframes rotateAura {
            to { transform: rotate(360deg); }
        }

        .zia-card > * {
            position: relative;
            z-index: 2;
        }

        .zia-btn-group {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 14px;
            margin-bottom: 24px;
            padding: 6px;
            border-radius: 22px;
            background: rgba(0, 0, 0, 0.26);
            border: 1px solid rgba(255,255,255,0.08);
            box-shadow: inset 0 1px 0 rgba(255,255,255,0.05);
        }

        .zia-btn {
            min-height: 54px;
            background: rgba(255,255,255,0.035);
            border: 1px solid rgba(255, 170, 0, 0.34);
            color: #ffe3a1;
            padding: 14px 16px;
            border-radius: 16px;
            cursor: pointer;
            font-family: 'Orbitron', sans-serif;
            font-size: 12px;
            font-weight: 900;
            letter-spacing: 1.4px;
            transition: transform 0.22s ease, box-shadow 0.22s ease, background 0.22s ease, color 0.22s ease, border-color 0.22s ease;
            text-transform: uppercase;
            outline: none;
            box-shadow: inset 0 1px 0 rgba(255,255,255,0.05);
        }

        .zia-btn:hover {
            transform: translateY(-2px);
            border-color: rgba(255, 170, 0, 0.78);
            background: rgba(255, 170, 0, 0.10);
            box-shadow:
                0 16px 30px rgba(0,0,0,0.25),
                0 0 22px rgba(255,170,0,0.16),
                inset 0 1px 0 rgba(255,255,255,0.08);
        }

        .zia-btn.active {
            background: linear-gradient(135deg, #fff2bd 0%, #ffaa00 48%, #d28a00 100%);
            border-color: rgba(255, 213, 112, 0.95);
            color: #101010;
            box-shadow:
                0 18px 36px rgba(255, 170, 0, 0.20),
                0 0 0 4px rgba(255, 170, 0, 0.07),
                inset 0 1px 0 rgba(255,255,255,0.58);
        }

        .zia-editor-wrap {
            margin-bottom: 24px;
            border-radius: 24px;
            padding: 1px;
            background: linear-gradient(145deg, rgba(255,170,0,0.48), rgba(255,255,255,0.08), rgba(212,175,55,0.26));
            box-shadow: 0 18px 44px rgba(0,0,0,0.32);
        }

        .zia-editor-shell {
            position: relative;
            overflow: hidden;
            border-radius: 23px;
            background:
                radial-gradient(circle at 18% 0%, rgba(255,170,0,0.08), transparent 30%),
                rgba(2, 2, 3, 0.88);
        }

        .zia-editor-topbar {
            min-height: 48px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 13px 18px;
            border-bottom: 1px solid rgba(255,255,255,0.08);
            background: rgba(255,255,255,0.025);
        }

        .zia-editor-title {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: #ffe4a3;
            font-family: 'Orbitron', sans-serif;
            font-size: 11px;
            font-weight: 900;
            letter-spacing: 1.2px;
            text-transform: uppercase;
        }

        .zia-editor-title::before {
            content: '';
            width: 9px;
            height: 9px;
            border-radius: 999px;
            background: var(--gold);
            box-shadow: 0 0 18px rgba(255,170,0,0.78);
        }

        .zia-editor-status {
            color: rgba(255,255,255,0.48);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.4px;
        }

        .zia-input {
            width: 100%;
            min-height: 430px;
            resize: none;
            display: block;
            border: none;
            outline: none;
            background: transparent;
            color: #ffffff;
            padding: 24px 26px;
            font-size: 19px;
            line-height: 1.62;
            font-family: 'Rajdhani', sans-serif;
            font-weight: 700;
            letter-spacing: 0.2px;
            box-sizing: border-box;
            caret-color: var(--gold);
        }

        .zia-input::placeholder {
            color: rgba(255,255,255,0.30);
        }

        .zia-input:focus {
            background: rgba(255, 170, 0, 0.025);
        }

        .zia-input::-webkit-scrollbar {
            width: 10px;
        }

        .zia-input::-webkit-scrollbar-track {
            background: rgba(0,0,0,0.55);
            border-radius: 999px;
        }

        .zia-input::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #ffe5a3, #ffaa00, #9f6900);
            border-radius: 999px;
            border: 2px solid rgba(0,0,0,0.72);
            box-shadow: 0 0 18px rgba(255,170,0,0.34);
        }

        .zia-input::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #ffffff, #ffd16d, #ffaa00);
        }

        .zia-actions {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .btn-reset {
            border-color: rgba(255, 49, 49, 0.62);
            color: #ff9b9b;
        }

        .btn-reset:hover {
            background: rgba(255, 49, 49, 0.14);
            border-color: rgba(255, 49, 49, 0.92);
            color: #ffffff;
            box-shadow:
                0 16px 30px rgba(0,0,0,0.25),
                0 0 24px var(--red-soft);
        }

        .btn-copy {
            border-color: rgba(0, 234, 255, 0.62);
            color: #9cf7ff;
        }

        .btn-copy:hover {
            background: rgba(0, 234, 255, 0.14);
            border-color: rgba(0, 234, 255, 0.95);
            color: #ffffff;
            box-shadow:
                0 16px 30px rgba(0,0,0,0.25),
                0 0 24px var(--cyan-soft);
        }

        #zia-toast {
            position: fixed;
            top: 22px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, #fff2bd, #ffaa00 55%, #d28a00);
            color: #111111;
            padding: 12px 34px;
            border-radius: 999px;
            display: none;
            z-index: 99999;
            font-weight: 900;
            font-family: 'Orbitron', sans-serif;
            font-size: 12px;
            letter-spacing: 0.8px;
            text-transform: uppercase;
            white-space: nowrap;
            border: 1px solid rgba(255,255,255,0.35);
            box-shadow:
                0 18px 36px rgba(0,0,0,0.38),
                0 0 30px rgba(255,170,0,0.35),
                inset 0 1px 0 rgba(255,255,255,0.55);
        }

        @media (max-width: 768px) {
            body {
                align-items: flex-start;
                padding: 18px 12px;
            }

            #zia-handover-root {
                max-width: 100%;
            }

            .zia-header {
                margin-bottom: 18px;
            }

            .zia-header h1 {
                font-size: 24px;
                letter-spacing: 5px;
            }

            .zia-card {
                padding: 18px;
                border-radius: 24px;
            }

            .zia-card::after {
                border-radius: 23px;
            }

            .zia-btn-group {
                gap: 8px;
                margin-bottom: 18px;
                border-radius: 18px;
                padding: 5px;
            }

            .zia-btn {
                min-height: 48px;
                padding: 11px 7px;
                font-size: 10px;
                letter-spacing: 0.8px;
                border-radius: 13px;
            }

            .zia-editor-wrap {
                margin-bottom: 18px;
                border-radius: 19px;
            }

            .zia-editor-shell {
                border-radius: 18px;
            }

            .zia-editor-topbar {
                min-height: auto;
                padding: 12px 14px;
                flex-direction: column;
                align-items: flex-start;
                gap: 5px;
            }

            .zia-editor-title {
                font-size: 10px;
            }

            .zia-editor-status {
                font-size: 11px;
            }

            .zia-input {
                min-height: 360px;
                padding: 18px;
                font-size: 16px;
                line-height: 1.58;
            }

            .zia-actions {
                grid-template-columns: 1fr;
                gap: 12px;
            }

            #zia-toast {
                width: calc(100% - 34px);
                max-width: 420px;
                top: 12px;
                padding: 11px 16px;
                font-size: 10px;
                text-align: center;
            }
        }

        @media (max-width: 420px) {
            body {
                padding: 0 0 16px;
                background: #050505;
            }

            .zia-header {
                padding: 22px 12px 0;
            }

            .zia-header h1 {
                font-size: 20px;
                letter-spacing: 3px;
            }

            .zia-card {
                border-radius: 0;
                border-left: none;
                border-right: none;
            }

            .zia-btn-group {
                grid-template-columns: 1fr;
            }
        }
    

        /* === FINAL ZIA THEME: BLUE DOPE + ORANGE, SESUAI MENU INDEX === */
        body {
            background:
                radial-gradient(circle at 12% 10%, rgba(56, 189, 248, 0.20), transparent 28%) !important,
                radial-gradient(circle at 90% 80%, rgba(255, 138, 0, 0.16), transparent 30%) !important,
                linear-gradient(135deg, #020817 0%, #071120 45%, #030712 100%) !important;
        }

        body::after {
            background: linear-gradient(120deg, transparent 0%, rgba(255, 138, 0, 0.060) 48%, transparent 58%) !important;
        }

        .zia-header h1 {
            filter: drop-shadow(0 0 22px rgba(56, 189, 248, 0.24)) !important;
        }

        .zia-header h1 span {
            color: #dff6ff !important;
            text-shadow:
                0 0 8px rgba(56, 189, 248, 0.70),
                0 0 24px rgba(255, 138, 0, 0.30) !important;
        }

        @keyframes neonTitle {
            0%, 16%, 20%, 24%, 100% {
                color: #dff6ff;
                text-shadow:
                    0 0 8px rgba(56, 189, 248, 0.70),
                    0 0 24px rgba(255, 138, 0, 0.30);
                opacity: 1;
            }
            18%, 22% {
                color: rgba(255,255,255,0.34);
                text-shadow: none;
                opacity: 0.62;
            }
        }

        .zia-card {
            background:
                linear-gradient(180deg, rgba(255,255,255,0.055), transparent 34%),
                linear-gradient(135deg, rgba(8,25,48,0.96), rgba(3,7,18,0.96)) !important;
            border-color: rgba(56, 189, 248, 0.34) !important;
            box-shadow:
                0 36px 88px var(--shadow),
                0 0 0 1px rgba(255,255,255,0.035),
                0 0 48px rgba(56,189,248,0.12),
                inset 0 1px 0 rgba(255,255,255,0.09) !important;
        }

        .zia-card::before {
            background: conic-gradient(from 160deg, transparent, rgba(56,189,248,0.50), rgba(255,138,0,0.36), transparent 42%) !important;
        }

        .zia-card::after {
            background: radial-gradient(circle at 10% 0%, rgba(255,138,0,0.10), transparent 32%) !important;
        }

        .zia-btn {
            border-color: rgba(56, 189, 248, 0.38) !important;
            color: #dff6ff !important;
        }

        .zia-btn:hover {
            border-color: rgba(255, 138, 0, 0.78) !important;
            background: rgba(255, 138, 0, 0.10) !important;
            box-shadow:
                0 16px 30px rgba(0,0,0,0.25),
                0 0 22px rgba(255,138,0,0.18),
                inset 0 1px 0 rgba(255,255,255,0.08) !important;
        }

        .zia-btn.active {
            background: linear-gradient(135deg, #dff6ff 0%, #38bdf8 45%, #ff8a00 100%) !important;
            border-color: rgba(255, 138, 0, 0.95) !important;
            color: #020817 !important;
            box-shadow:
                0 18px 36px rgba(56, 189, 248, 0.20),
                0 0 0 4px rgba(255, 138, 0, 0.08),
                inset 0 1px 0 rgba(255,255,255,0.58) !important;
        }

        .zia-editor-wrap {
            background: linear-gradient(145deg, rgba(56,189,248,0.48), rgba(255,255,255,0.08), rgba(255,138,0,0.30)) !important;
        }

        .zia-editor-shell {
            background:
                radial-gradient(circle at 18% 0%, rgba(56,189,248,0.10), transparent 30%),
                rgba(2, 8, 23, 0.90) !important;
        }

        .zia-editor-title {
            color: #dff6ff !important;
        }

        .zia-editor-title::before {
            background: #ff8a00 !important;
            box-shadow: 0 0 18px rgba(255,138,0,0.78) !important;
        }

        .zia-input {
            caret-color: #ff8a00 !important;
        }

        .zia-input:focus {
            background: rgba(56, 189, 248, 0.030) !important;
        }

        .zia-input::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #dff6ff, #38bdf8, #ff8a00) !important;
            box-shadow: 0 0 18px rgba(56,189,248,0.34) !important;
        }

        .zia-input::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #ffffff, #38bdf8, #ff8a00) !important;
        }

        .btn-copy {
            border-color: rgba(56, 189, 248, 0.62) !important;
            color: #9cf7ff !important;
        }

        .btn-copy:hover {
            background: rgba(56, 189, 248, 0.14) !important;
            border-color: rgba(56, 189, 248, 0.95) !important;
        }

        #zia-toast {
            background: linear-gradient(135deg, #dff6ff, #38bdf8 48%, #ff8a00) !important;
            color: #020817 !important;
            box-shadow:
                0 18px 36px rgba(0,0,0,0.38),
                0 0 30px rgba(56,189,248,0.35),
                inset 0 1px 0 rgba(255,255,255,0.55) !important;
        }

    </style>
</head>
<body>

<div id="zia-handover-root">
    <div id="zia-toast"></div>

    <div class="zia-header">
        <h1>
            <span>S</span><span>E</span><span>R</span><span>A</span><span>H</span><span>&nbsp;</span>
            <span>T</span><span>E</span><span>R</span><span>I</span><span>M</span><span>A</span><span>&nbsp;</span>
            <span>C</span><span>S</span>
        </h1>
    </div>

    <div class="zia-card">
        <div class="zia-btn-group">
            <button class="zia-btn shift-btn" id="btn-PAGI" onclick="setShift('PAGI', this)">PAGI</button>
            <button class="zia-btn shift-btn" id="btn-SORE" onclick="setShift('SORE', this)">SORE</button>
            <button class="zia-btn shift-btn" id="btn-MALAM" onclick="setShift('MALAM', this)">MALAM</button>
        </div>

        <div class="zia-editor-wrap">
            <div class="zia-editor-shell">
                <div class="zia-editor-topbar">
                    <div class="zia-editor-title">Laporan Serah Terima</div>
                    <div class="zia-editor-status">Auto-save aktif di perangkat ini</div>
                </div>
                <textarea id="report-content" class="zia-input" placeholder="Masukkan laporan serah terima..." oninput="autoSave()"></textarea>
            </div>
        </div>
        
        <div class="zia-actions">
            <button class="zia-btn btn-reset" onclick="resetForm()">RESET DATA</button>
            <button class="zia-btn btn-copy" onclick="copyData()">📋 COPY DATA</button>
        </div>
    </div>
</div>

<script>
    window.onload = function() {
        const savedText = localStorage.getItem('zia_report_text');
        const savedShift = localStorage.getItem('zia_report_shift');
        if (savedText) document.getElementById('report-content').value = savedText;
        if (savedShift) {
            const btn = document.getElementById('btn-' + savedShift);
            if (btn) setShift(savedShift, btn, false);
        }
    };

    function showToast(msg) {
        const t = document.getElementById('zia-toast');
        t.innerText = msg;
        t.style.display = 'block';
        setTimeout(() => { t.style.display = 'none'; }, 2000);
    }

    function autoSave() {
        localStorage.setItem('zia_report_text', document.getElementById('report-content').value);
    }

    function setShift(shift, btn, shouldUpdateText = true) {
        document.querySelectorAll('.shift-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        localStorage.setItem('zia_report_shift', shift);
        const txt = document.getElementById('report-content');
        const headerPattern = /SERAH TERIMA CS SHIFT (PAGI|SORE|MALAM)/i;
        if (shouldUpdateText) {
            if (headerPattern.test(txt.value)) {
                txt.value = txt.value.replace(headerPattern, "SERAH TERIMA CS SHIFT " + shift);
            } else {
                const oldContent = txt.value.trim();
                txt.value = "SERAH TERIMA CS SHIFT " + shift + "\n" + (oldContent ? oldContent : "1. ");
            }
            autoSave();
            showToast(shift + " AKTIF");
        }
    }

    function copyData() {
        const content = document.getElementById('report-content').value;
        if(!content.trim()) { showToast("DATA KOSONG!"); return; }
        navigator.clipboard.writeText(content).then(() => {
            showToast("BERHASIL COPY KE CLIPBOARD 📋");
        }).catch(() => {
            const area = document.getElementById('report-content');
            area.select();
            document.execCommand('copy');
            window.getSelection().removeAllRanges();
            showToast("BERHASIL COPY 📋");
        });
    }

    function resetForm() {
        if(confirm("Hapus semua data laporan secara permanen?")) {
            document.getElementById('report-content').value = '';
            document.querySelectorAll('.shift-btn').forEach(b => b.classList.remove('active'));
            localStorage.removeItem('zia_report_text');
            localStorage.removeItem('zia_report_shift');
            showToast("DATA DIRESET");
        }
    }
</script>

</body>
</html>
