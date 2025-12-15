<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Relatório de Simulação de Mais-Valias</title>
    <style>
        body { font-family: 'Helvetica', sans-serif; color: #1a1a1a; margin: 0; padding: 0; }
        .container { width: 100%; max-width: 800px; margin: 0 auto; }
        
        .header { background-color: #000; color: #c5a059; padding: 40px; text-align: center; margin-bottom: 40px; }
        .logo { font-size: 28px; font-weight: bold; letter-spacing: 4px; text-transform: uppercase; margin-bottom: 10px; }
        .subtitle { font-size: 10px; text-transform: uppercase; letter-spacing: 2px; color: #fff; opacity: 0.8; }
        
        .result-card { background-color: #f9fafb; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden; margin-bottom: 30px; }
        .result-header { background-color: #c5a059; color: #fff; padding: 20px; text-align: center; }
        .result-title { font-size: 12px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 5px; opacity: 0.9; }
        .result-value { font-size: 36px; font-weight: bold; }
        
        .details-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .details-table th, .details-table td { padding: 15px 20px; text-align: left; border-bottom: 1px solid #eee; font-size: 13px; }
        .details-table th { color: #666; font-weight: normal; }
        .details-table td { text-align: right; font-weight: bold; color: #111; }
        .details-table .highlight { color: #c5a059; }
        .details-table .negative { color: #dc2626; }
        
        .footer { text-align: center; font-size: 10px; color: #999; margin-top: 50px; border-top: 1px solid #eee; padding-top: 20px; }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">Diogo Maia</div>
        <div class="subtitle">Real Estate & Investments</div>
    </div>

    <div class="container">
        <div class="result-card">
            <div class="result-header">
                <div class="result-title">Imposto Estimado (IRS)</div>
                <div class="result-value">{{ $results['estimated_tax_fmt'] }} €</div>
            </div>
            <table class="details-table" style="margin: 0;">
                <tr>
                    <th style="background-color: #fff;">Mais-Valia Bruta</th>
                    <td style="background-color: #fff; font-size: 16px;">{{ $results['gross_gain_fmt'] }} €</td>
                </tr>
                <tr>
                    <th style="background-color: #f3f4f6;">Base Tributável (50%)</th>
                    <td style="background-color: #f3f4f6; font-size: 16px;">{{ $results['taxable_gain_fmt'] }} €</td>
                </tr>
            </table>
        </div>

        <h3 style="font-size: 14px; text-transform: uppercase; border-bottom: 2px solid #c5a059; padding-bottom: 10px; margin-bottom: 20px;">Detalhamento do Cálculo</h3>

        <table class="details-table">
            <tr>
                <th>Valor de Venda</th>
                <td>{{ $results['sale_fmt'] }} €</td>
            </tr>
            <tr>
                <th>Coeficiente de Atualização ({{ $data['acquisition_year'] }})</th>
                <td>{{ $results['coefficient'] }}</td>
            </tr>
            <tr>
                <th>Valor de Aquisição Atualizado</th>
                <td class="negative">- {{ $results['acquisition_updated_fmt'] }} €</td>
            </tr>
            <tr>
                <th>Despesas e Encargos</th>
                <td class="negative">- {{ $results['expenses_fmt'] }} €</td>
            </tr>
            @if(isset($results['reinvestment_fmt']) && $results['reinvestment_fmt'] != '0,00')
            <tr>
                <th>Valor Reinvestido / Amortizado</th>
                <td class="negative">- {{ $results['reinvestment_fmt'] }} €</td>
            </tr>
            @endif
            <tr style="border-top: 2px solid #eee;">
                <th>MAIS-VALIA FINAL APURADA</th>
                <td class="highlight">{{ $results['gross_gain_fmt'] }} €</td>
            </tr>
        </table>

        <div class="footer">
            <p>Simulação gerada em {{ $date }} | Diogo Maia Real Estate</p>
            <p>Este documento é meramente informativo e não dispensa a consulta oficial.</p>
        </div>
    </div>
</body>
</html>