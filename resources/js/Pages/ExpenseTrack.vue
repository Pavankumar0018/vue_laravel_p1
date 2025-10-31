<template>
    <Header/>
    <div class="container">
        <Balence />
        <IncomeExpenses />
        <TransactionList />
        <AddTransaction />
    </div>
</template>

<script>
import Header from '@/Components/ExpenseComponents/Header.vue';
import Balence from '@/Components/ExpenseComponents/Balence.vue';
import IncomeExpenses from '@/Components/ExpenseComponents/IncomeExpenses.vue';
import TransactionList from '@/Components/ExpenseComponents/TransactionList.vue';
import AddTransaction from '@/Components/ExpenseComponents/AddTransaction.vue';
export default {
    components: {
        Header,
        Balence,
        IncomeExpenses,
        TransactionList,
        AddTransaction
    }
}
</script>