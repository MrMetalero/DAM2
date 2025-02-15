package com.example;
public class Factura {
    private String cliente;
    private String contrato;
    private double totalMensual;

    // Constructor
    public Factura(String cliente, String contrato, double totalMensual) {
        this.cliente = cliente;
        this.contrato = contrato;
        this.totalMensual = totalMensual;
    }

    public String getCliente() {
        return cliente;
    }

    public void setCliente(String cliente) {
        this.cliente = cliente;
    }

    public String getContrato() {
        return contrato;
    }

    public void setContrato(String contrato) {
        this.contrato = contrato;
    }

    public double getTotalMensual() {
        return totalMensual;
    }

    public void setTotalMensual(double totalMensual) {
        this.totalMensual = totalMensual;
    }

    @Override
    public String toString() {
        return "Facturas{" +
                "cliente='" + cliente + '\'' +
                ", contrato='" + contrato + '\'' +
                ", totalMensual=" + totalMensual +
                '}';
    }
}